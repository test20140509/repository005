<h2><%=l(:label_news)%></h2>

<% labelled_tabular_form_for :news, @news, :url => { :action => "edit" },
                                           :html => { :id => 'news-form' } do |f| %>
<%= render :partial => 'form', :locals => { :f => f } %>
<%= submit_tag l(:button_save) %>
<%= link_to_remote l(:label_preview), 
                   { :url => { :controller => 'news', :action => 'preview', :project_id => @project },
                     :method => 'post',
                     :update => 'preview',
                     :with => "Form.serialize('news-form')"
                   }, :accesskey => accesskey(:preview) %>
<% end %>
<div id="preview" class="wiki"></div>
