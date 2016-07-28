<?
$subject_val = "Re: [MTT devel] MTToGDS";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 16 10:18:27 2010" -->
<!-- isoreceived="20100216151827" -->
<!-- sent="Tue, 16 Feb 2010 18:19:12 +0300" -->
<!-- isosent="20100216151912" -->
<!-- name="Igor Ivanov" -->
<!-- email="igor.ivanov_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTToGDS" -->
<!-- id="4B7AB770.5060407_at_argus-cv.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2AE960A7-F377-4111-938A-C3C20DD42067_at_cisco.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [MTT devel] MTToGDS<br>
<strong>From:</strong> Igor Ivanov (<em>igor.ivanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-16 10:19:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0499.php">Mike Dubman: "Re: [MTT devel] MTT GDS -- one more..."</a>
<li><strong>Previous message:</strong> <a href="0497.php">Jeff Squyres: "Re: [MTT devel] GDS errors"</a>
<li><strong>In reply to:</strong> <a href="0496.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0500.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0500.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/03/0501.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
<font size="-1"><font face="Arial">Hi Jeff,<br>
<br>
I am sending patch that enable google account approach to submit data
to MTT GDS.<br>
It also has the fix to a bug in displaying table as respond to
bquery.pl --view (It has not been committed yet to MTT trunk).<br>
<br>
As for question relating "how does one develop ..." that source
information can be found at following location as:
<a class="moz-txt-link-freetext" href="http://svn.open-mpi.org/svn/mtt/trunk/docs/gds/VBench_GDS_Setup.doc">http://svn.open-mpi.org/svn/mtt/trunk/docs/gds/VBench_GDS_Setup.doc</a>.<br>
In case you make a resolve to accept patch I am sending next steps
should be done:<br>
<br>
1. update application on server side using instruction in </font></font><font
 size="-1"><font face="Arial">VBench_GDS_Setup.doc (topic 4
"Installation")<br>
example: appcfg.py update &lt;local folder with open-mpi-mtt&gt;/<br>
2. change version on
<a class="moz-txt-link-freetext" href="https://appengine.google.com/deployment?&app_id=open-mpi-mtt&version_id=1.337140739868725607">https://appengine.google.com/deployment?&amp;app_id=open-mpi-mtt&amp;version_id=1.337140739868725607</a>
from 1 to 2 (make default)<br>
note: after this operation all users that attempt to submit data using
previous scheme of authentication will get failure respond.<br>
3. go to </font></font><font size="-1"><font face="Arial">open-mpi-mtt
and add new users with google account</font></font><br>
<font size="-1"><font face="Arial"><br>
<br>
Regards,<br>
Igor<br>
</font></font><br>
Jeff Squyres wrote:
<blockquote cite="mid:2AE960A7-F377-4111-938A-C3C20DD42067@cisco.com"
 type="cite">
  <pre wrap="">Great -- many thanks!

On Feb 12, 2010, at 12:32 PM, Igor Ivanov wrote:

  </pre>
  <blockquote type="cite">
    <pre wrap="">Hi Jeff,

I have done changes related google account support but not tested them well.
I will try to send them on Monday.

Regards,
Igor

Jeff Squyres wrote:
    </pre>
    <blockquote type="cite">
      <pre wrap="">On Feb 10, 2010, at 9:09 AM, Igor Ivanov wrote:

  

      </pre>
      <blockquote type="cite">
        <blockquote type="cite">
          <pre wrap="">I took a swipe at doing this (totally not tested; how does one develop/test this stuff?).  I know just a tiny bit of python, but the code was fairly readable.  Please see the attached patch -- is it anywhere close to correct?

      

          </pre>
        </blockquote>
        <pre wrap="">[II] It seems close but you forget about bquery.pl that allows to add a new user and related handler (processes bquery.pl --admin) on gds/main.py at least.
    

        </pre>
      </blockquote>
      <pre wrap="">Oh, yikes -- good catch.  I'll look into that...

How does one develop / test / debug / deploy changes to this stuff?

  

      </pre>
    </blockquote>
    <pre wrap="">
__________ Information from ESET NOD32 Antivirus, version of virus signature database 4861 (20100212) __________

The message was checked by ESET NOD32 Antivirus.

<a class="moz-txt-link-freetext" href="http://www.esetnod32.ru">http://www.esetnod32.ru</a>
    </pre>
  </blockquote>
  <pre wrap=""><!---->

  </pre>
</blockquote>
<BR>
<BR>
__________ Information from ESET NOD32 Antivirus, version of virus signature database 4871 (20100216) __________<BR>
<BR>
The message was checked by ESET NOD32 Antivirus.<BR>
<BR>
<A HREF="http://www.esetnod32.ru">http://www.esetnod32.ru</A><BR>


</body>


<p>
Index: client/bquery.pl
<br>
===================================================================
<br>
--- client/bquery.pl	(revision 1349)
<br>
+++ client/bquery.pl	(working copy)
<br>
@@ -143,7 +143,7 @@
<br>
&nbsp;my $opt_format;
<br>
&nbsp;my $opt_mailto;
<br>
&nbsp;
<br>
-my @opt_newuser;
<br>
+my $opt_newuser;
<br>
&nbsp;
<br>
&nbsp;GetOptions (&quot;help|h&quot; =&gt; \$opt_help,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;server|a=s&quot; =&gt; \$opt_server,
<br>
@@ -172,7 +172,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;format|V=s&quot; =&gt; \$opt_format,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;email|e=s&quot; =&gt; \$opt_mailto,
<br>
&nbsp;
<br>
-            &quot;newuser=s{3,5}&quot; =&gt; \@opt_newuser
<br>
+            &quot;newuser=s&quot; =&gt; \$opt_newuser
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);
<br>
&nbsp;
<br>
&nbsp;
<br>
@@ -426,10 +426,7 @@
<br>
&nbsp;}
<br>
&nbsp;elsif ($opt_admin)
<br>
&nbsp;{
<br>
-    if ($#opt_newuser &gt; 0) 
<br>
-    {
<br>
-        $conf{newuser} = \@opt_newuser;
<br>
-    }
<br>
+    $conf{newuser} = $opt_newuser;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;admin( \%conf ); 
<br>
&nbsp;}
<br>
@@ -544,7 +541,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!defined($action) || $action eq '' || $action eq 'admin')
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
-        printf (&quot; %-5s %-10s\t%-s\n&quot;, '', '--newuser', &quot;User information as username, password, email (mandatory) and first_name, last_name (optional). Keep order of values.&quot;);
<br>
+        printf (&quot; %-5s %-10s\t%-s\n&quot;, '', '--newuser', &quot;User information as username (Google account).&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!defined($action) || $action eq '' || $action eq 'update')
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
@@ -851,7 +848,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ua-&gt;agent(&quot;bquery.pl:admin&quot;);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $request;
<br>
-    if (exists($conf_ref-&gt;{newuser}) &amp;&amp; $#{$conf_ref-&gt;{newuser}} &gt;=2)
<br>
+    if (exists($conf_ref-&gt;{newuser}))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$request = POST(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$conf_ref-&gt;{url},
<br>
@@ -859,11 +856,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Content =&gt; [
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADMIN       =&gt; 1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_NEWUSER_   =&gt; 1,
<br>
-                            username    =&gt; $conf_ref-&gt;{newuser}-&gt;[0],
<br>
-                            password    =&gt; $conf_ref-&gt;{newuser}-&gt;[1],
<br>
-                            email       =&gt; $conf_ref-&gt;{newuser}-&gt;[2],
<br>
-                            first_name  =&gt; ($#{$conf_ref-&gt;{newuser}} &gt;=3 ? $conf_ref-&gt;{newuser}-&gt;[3] : ''),
<br>
-                            last_name   =&gt; ($#{$conf_ref-&gt;{newuser}} &gt;=4 ? $conf_ref-&gt;{newuser}-&gt;[4] : ''),
<br>
+                            username    =&gt; $conf_ref-&gt;{newuser},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;description =&gt; 'bquery admin'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
Index: server/gds/admin/admin.py
<br>
===================================================================
<br>
--- server/gds/admin/admin.py	(revision 1349)
<br>
+++ server/gds/admin/admin.py	(working copy)
<br>
@@ -69,10 +69,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status = 401
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user = auth.add_user(username = self.request.get('username_'),
<br>
-                                 password = self.request.get('password_'),
<br>
-                                 email = self.request.get('email_'),
<br>
-                                 first_name = self.request.get('first_name_'),
<br>
-                                 last_name = self.request.get('last_name_'),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is_superuser = self.request.get('is_superuser_')
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
Index: server/gds/app.yaml
<br>
===================================================================
<br>
--- server/gds/app.yaml	(revision 1349)
<br>
+++ server/gds/app.yaml	(working copy)
<br>
@@ -7,8 +7,8 @@
<br>
&nbsp;# $HEADER$
<br>
&nbsp;#
<br>
&nbsp;
<br>
-application: vbench-dev
<br>
-version: 8
<br>
+application: open-mpi-mtt
<br>
+version: 2
<br>
&nbsp;runtime: python
<br>
&nbsp;api_version: 1
<br>
&nbsp;
<br>
Index: server/gds/auth/__init__.py
<br>
===================================================================
<br>
--- server/gds/auth/__init__.py	(revision 1349)
<br>
+++ server/gds/auth/__init__.py	(working copy)
<br>
@@ -32,9 +32,18 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;logging.debug('check_login %s: &lt;%s&gt; admin = %s user = %s' % 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(self.__class__.__name__, self.request.method, str(users.is_current_user_admin()), str(self.user)))
<br>
&nbsp;
<br>
+        user = users.get_current_user()
<br>
+        
<br>
+        if not user:
<br>
+            greeting = (&quot;&lt;a href=\&quot;%s\&quot;&gt;Sign in or register&lt;/a&gt;.&quot; %
<br>
+                  users.create_login_url(&quot;/&quot;))
<br>
+            self.response.set_status(401) # Unauthorized
<br>
+            self.response.out.write(&quot;&lt;html&gt;&lt;body&gt;%s&lt;/body&gt;&lt;/html&gt;&quot; % greeting)
<br>
+            return
<br>
+        
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if not users.is_current_user_admin() and self.user is None:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if self.request.method == 'GET':
<br>
-                credential = [self.request.get('username'), self.request.get('password')]
<br>
+                credential = [user.email(), None]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;self.user = authenticate(credential)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if self.user is None:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;self.redirect('%s?%s=%s' % ('/login/', 'next', urllib.quote(self.request.uri)))
<br>
@@ -86,9 +95,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users = query.filter('is_active =', True)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user = users.get()
<br>
&nbsp;
<br>
-    if user:
<br>
-        if ((not user.check_password(raw_password = credential[1], password = user.password)) and
<br>
-            (user.password != credential[1])): 
<br>
+    if user and credential[1] is not None:
<br>
+        if (not user.check_password(raw_password = credential[1])): 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user = None
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;logging.debug('authenticate: %s' % str(user))
<br>
@@ -103,25 +111,14 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;logging.debug('add_user: %s' % str(credential))
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user = None
<br>
-    email_re = re.compile(r'[\w\d\.\-\+]+@[\w\d\.\-\+]+\.[\w\d\.\-\+]+')
<br>
-    if (not credential.has_key('email') or 
<br>
-        not email_re.match(credential['email'])):
<br>
-        logging.error(&quot;Invalid email = '%s'&quot; % (credential['email']))
<br>
-        return user
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;query = db.Query(User)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;query_users = query.filter('username =', credential['username'])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if query_users.count()&gt;1:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;logging.error(&quot;There are several users with username = '%s' and email = '%s'&quot; % (credential['username'], credential['email']))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;user = query_users.get()   
<br>
-    elif (credential.has_key('username') and 
<br>
-          credential.has_key('password')):
<br>
-        user = User(username = credential['username'],
<br>
-                    email = credential['email']
<br>
-                    )
<br>
-        user.set_password(credential['password'])
<br>
-        if (credential.has_key('first_name')): user.first_name = credential['first_name']
<br>
-        if (credential.has_key('last_name')): user.last_name = credential['last_name']
<br>
+    elif (credential.has_key('username')):
<br>
+        user = User(username = credential['username'])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (credential.has_key('is_superuser') and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;credential['is_superuser'].lower() in ('yes', 'true')): user.is_superuser = True
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else:
<br>
Index: server/gds/auth/models.py
<br>
===================================================================
<br>
--- server/gds/auth/models.py	(revision 1349)
<br>
+++ server/gds/auth/models.py	(working copy)
<br>
@@ -21,10 +21,6 @@
<br>
&nbsp;
<br>
&nbsp;class User(db.Model):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;username     = db.StringProperty(required=True)
<br>
-    password     = db.StringProperty()
<br>
-    email        = db.EmailProperty(required=True)
<br>
-    first_name   = db.StringProperty()
<br>
-    last_name    = db.StringProperty()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is_superuser = db.BooleanProperty(default=False)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is_active    = db.BooleanProperty(default=True)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;last_login   = db.DateTimeProperty()
<br>
@@ -42,17 +38,23 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;full_name = '%s %s' % (self.first_name, self.last_name)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return full_name.strip()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
-    def set_password(self, raw_password):
<br>
-        import sha, random
<br>
+    def check_password(self, raw_password):
<br>
+        import urllib
<br>
+        import logging
<br>
+        from google.appengine.api import urlfetch 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
-        algorithm = 'sha1'
<br>
-        salt = sha.new(str(random.random())).hexdigest()[:5]
<br>
-        hash = sha.new(salt+raw_password).hexdigest()
<br>
-            
<br>
-        self.password = '|'.join((algorithm, hash, salt))
<br>
-       
<br>
-    def check_password(self, raw_password, password):
<br>
-        import sha
<br>
-              
<br>
-        (algorithm, hash, salt) = self.password.split('|')
<br>
-        return hash == sha.new(salt + raw_password).hexdigest()
<br>
+        request_body = urllib.urlencode({'Email': self.username,
<br>
+                                         'Passwd': raw_password,
<br>
+                                         'accountType': 'HOSTED_OR_GOOGLE',
<br>
+                                         'service': 'ah',
<br>
+                                         'source': 'test'})
<br>
+        auth_response = urlfetch.fetch('<a href="https://www.google.com/accounts/ClientLogin">https://www.google.com/accounts/ClientLogin</a>',
<br>
+                                       method=urlfetch.POST,
<br>
+                                       headers={'Content-type':'application/x-www-form-urlencoded',
<br>
+                                                'Content-Length':
<br>
+                                                    str(len(request_body))},
<br>
+                                       payload=request_body)
<br>
+        auth_dict = dict(x.split(&quot;=&quot;) for x in auth_response.content.split(&quot;\n&quot;) if x)
<br>
+        auth_token = auth_dict.has_key(&quot;Auth&quot;)
<br>
+
<br>
+        return auth_token
<br>
Index: server/gds/main.py
<br>
===================================================================
<br>
--- server/gds/main.py	(revision 1349)
<br>
+++ server/gds/main.py	(working copy)
<br>
@@ -150,13 +150,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status = 401    # Unauthorized
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else:
<br>
-            query = {}
<br>
-            query['username'] = user.username
<br>
-            query['password'] = user.password
<br>
-            url = '%s?%s' % (self.request.get('next') , 
<br>
-                             '&amp;'.join('%s=%s' % (urllib.quote_plus(k.encode('utf8')),
<br>
-                                                 urllib.quote_plus(v.encode('utf8')))
<br>
-                             for k, v in query.iteritems()))
<br>
+            url = '%s' % (self.request.get('next'))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status = 302    # Found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;self.response.set_status(status)        
<br>
@@ -952,11 +946,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if 'ADMIN' in self.request.arguments():
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ('_NEWUSER_' in self.request.arguments()):                
<br>
-                user = auth.add_user(username = self.request.get('username'),
<br>
-                                     password = self.request.get('password'),
<br>
-                                     email = self.request.get('email'),
<br>
-                                     first_name = self.request.get('first_name'),
<br>
-                                     last_name = self.request.get('last_name'))
<br>
+                user = auth.add_user(username = self.request.get('username'))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if user is None:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status = 400
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else:                   
<br>
@@ -1001,8 +991,18 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;query = db.GqlQuery(query_str)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;result_set = query
<br>
&nbsp;
<br>
+                            excluded_list = [ 
<br>
+                                     'submitinfo',
<br>
+                                     'clusterinfo',
<br>
+                                     'mpiinfo',
<br>
+                                     'compilerinfo',
<br>
+                                     'suiteinfo',
<br>
+                                     'mpiinstallphase',
<br>
+                                     'testbuildphase',
<br>
+                                     'data_file'
<br>
+                                     ]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for entity in result_set:
<br>
-                                self.__fill_entity(entity, key_dict)
<br>
+                                self.__fill_entity(entity, key_dict, excluded_list, True)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;entity.put()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;except (datastore_errors.BadQueryError, datastore_errors.BadArgumentError, datastore_errors.BadRequestError, datastore_errors.BadRequestError, datastore_errors.BadFilterError, db.KindError), err:
<br>
@@ -1122,53 +1122,68 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;value from one of the entities for the key name.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;&quot;&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;key_dict = {}
<br>
+    key_dict['_id_'] = []
<br>
+    key_dict['_key_'] = []
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for entity in entities:
<br>
-        if key_dict.has_key('_key_'):
<br>
-            key_dict['_id_'].append(str(entity.key().id()))
<br>
-            key_dict['_key_'].append(str(entity.key()))
<br>
-        else:
<br>
-            key_dict['_id_'] = [str(entity.key().id())]
<br>
-            key_dict['_key_'] = [str(entity.key())]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for prop in entity.properties().values():
<br>
-            val = prop.get_value_for_datastore(entity)
<br>
-
<br>
-            if (datastore.typename(prop) in ['BlobProperty']):
<br>
-                val = 'blob'
<br>
-            elif (datastore.typename(prop) in ['ReferenceProperty']):
<br>
-                val = str(val)
<br>
-            elif (datastore.typename(prop) in ['EmailProperty', 'BooleanProperty']):
<br>
-                val = str(val)
<br>
-            elif (datastore.typename(prop) in ['TextProperty']):
<br>
-                val = unicode(val)
<br>
+            if not key_dict.has_key(prop):
<br>
+                key_dict[prop.name] = []
<br>
+        for prop in entity.dynamic_properties():
<br>
+            if not key_dict.has_key(prop):
<br>
+                key_dict[prop] = []
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
-            if val is None or val == 'unknown':
<br>
-                val = ''
<br>
-
<br>
-            if key_dict.has_key(prop.name):
<br>
-                key_dict[prop.name].append(str(val))
<br>
+    for entity in entities:            
<br>
+        for key in key_dict.keys():
<br>
+            if key in ['_id_']:
<br>
+                key_dict['_id_'].append(str(entity.key().id()))
<br>
+            elif key in ['_key_']:
<br>
+                key_dict['_key_'].append(str(entity.key()))
<br>
+                    
<br>
+            elif key in entity.properties():
<br>
+                prop = entity.properties()[key]
<br>
+                
<br>
+                val = prop.get_value_for_datastore(entity)
<br>
+    
<br>
+                if (datastore.typename(prop) in ['BlobProperty']):
<br>
+                    val = 'blob'
<br>
+                elif (datastore.typename(prop) in ['ReferenceProperty']):
<br>
+                    val = str(val)
<br>
+                elif (datastore.typename(prop) in ['EmailProperty', 'BooleanProperty']):
<br>
+                    val = str(val)
<br>
+                elif (datastore.typename(prop) in ['TextProperty']):
<br>
+                    val = unicode(val)
<br>
+                    
<br>
+                if val is None or val == 'unknown':
<br>
+                    val = ''
<br>
+    
<br>
+                if key_dict.has_key(key):
<br>
+                    key_dict[key].append(str(val))
<br>
+                else:
<br>
+                    key_dict[key] = [str(val)]
<br>
+    
<br>
+            elif key in entity.dynamic_properties():
<br>
+                val = entity.__getattr__(key)
<br>
+    
<br>
+                if (type(val).__name__ in ['Blob']):
<br>
+                    val = 'blob'
<br>
+                elif (type(val).__name__ in ['Key']):
<br>
+                    val = str(val)
<br>
+                elif (type(val).__name__ in ['Email', 'bool']):
<br>
+                    val = str(val)
<br>
+                elif (type(val).__name__ in ['Text']):
<br>
+                    val = unicode(val)
<br>
+    
<br>
+                if val is None or val == 'unknown':
<br>
+                    val = ''
<br>
+    
<br>
+                if key_dict.has_key(key):
<br>
+                    key_dict[key].append(str(val))
<br>
+                else:
<br>
+                    key_dict[key] = [str(val)]
<br>
+                    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else:
<br>
-                key_dict[prop.name] = [str(val)]
<br>
+                key_dict[key].append('')
<br>
&nbsp;
<br>
-        for prop in entity.dynamic_properties():
<br>
-            val = entity.__getattr__(prop)
<br>
-
<br>
-            if (type(val).__name__ in ['Blob']):
<br>
-                val = 'blob'
<br>
-            elif (type(val).__name__ in ['Key']):
<br>
-                val = str(val)
<br>
-            elif (type(val).__name__ in ['Email', 'bool']):
<br>
-                val = str(val)
<br>
-            elif (type(val).__name__ in ['Text']):
<br>
-                val = unicode(val)
<br>
-
<br>
-            if val is None or val == 'unknown':
<br>
-                val = ''
<br>
-
<br>
-            if key_dict.has_key(prop):
<br>
-                key_dict[prop].append(str(val))
<br>
-            else:
<br>
-                key_dict[prop] = [str(val)]
<br>
-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return key_dict
<br>
&nbsp;
<br>
&nbsp;
<br>
Index: server/gds/templates/admin.html
<br>
===================================================================
<br>
--- server/gds/templates/admin.html	(revision 1349)
<br>
+++ server/gds/templates/admin.html	(working copy)
<br>
@@ -46,32 +46,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td nowrap=&quot;nowrap&quot; valign=&quot;top&quot;&gt;
<br>
-	            First name:
<br>
+	            User name (Google account):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/td&gt;
<br>
-	        &lt;td&gt;
<br>
-	            &lt;input  type=&quot;text&quot; name=&quot;first_name_&quot;  id=&quot;first_name_id&quot; size=&quot;30&quot; value=&quot;&quot; maxlength=&quot;255&quot; class=&quot;editbox&quot;/&gt;
<br>
-	        &lt;/td&gt;
<br>
-	    &lt;/tr&gt;
<br>
-	    &lt;tr&gt;
<br>
-	        &lt;td nowrap=&quot;nowrap&quot; valign=&quot;top&quot;&gt;
<br>
-	            Last name:
<br>
-	        &lt;/td&gt;
<br>
-	        &lt;td&gt;
<br>
-	            &lt;input  type=&quot;text&quot; name=&quot;last_name_&quot;  id=&quot;last_name_id&quot; size=&quot;30&quot; value=&quot;&quot; maxlength=&quot;255&quot; class=&quot;editbox&quot;/&gt;
<br>
-	        &lt;/td&gt;
<br>
-	    &lt;/tr&gt;
<br>
-        &lt;tr&gt;
<br>
-            &lt;td nowrap=&quot;nowrap&quot; valign=&quot;top&quot;&gt;
<br>
-                E-mail:
<br>
-            &lt;/td&gt;
<br>
-            &lt;td&gt;
<br>
-                &lt;input  type=&quot;text&quot; name=&quot;email_&quot;  id=&quot;email_id&quot; size=&quot;30&quot; value=&quot;&quot; maxlength=&quot;255&quot; class=&quot;editbox&quot;/&gt;
<br>
-            &lt;/td&gt;
<br>
-        &lt;/tr&gt;
<br>
-	    &lt;tr&gt;
<br>
-	        &lt;td nowrap=&quot;nowrap&quot; valign=&quot;top&quot;&gt;
<br>
-	            User name (login):
<br>
-	        &lt;/td&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td valign=&quot;top&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;table cellpadding=&quot;0&quot; bgcolor=&quot;#ffffff&quot; cellspacing=&quot;0&quot; border=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tbody&gt;
<br>
@@ -84,7 +60,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td align='left' &gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;font size=&quot;-1&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input  type=&quot;checkbox&quot; name=&quot;is_superuser_&quot; id=&quot;is_superuser_id&quot; value=&quot;true&quot;/&gt;
<br>
-	                        Is user an administrator  
<br>
+	                        Is user an MTT administrator  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/font&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/td&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;
<br>
@@ -94,25 +70,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td valign=&quot;top&quot; width=&quot;1%&quot; nowrap=&quot;nowrap&quot;&gt;
<br>
-	            Password:&amp;nbsp;&amp;nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/td&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td valign=&quot;top&quot;&gt;
<br>
-	            &lt;table cellpadding=&quot;0&quot; bgcolor=&quot;#ffffff&quot; cellspacing=&quot;0&quot; border=&quot;0&quot;&gt;
<br>
-	            &lt;tbody&gt;
<br>
-	                &lt;tr&gt;
<br>
-	                    &lt;td valign=&quot;top&quot;&gt;
<br>
-	                        &lt;input  type=&quot;password&quot; name=&quot;password_&quot; id=&quot;password_id&quot; size=&quot;30&quot; maxlength=&quot;255&quot; class=&quot;editbox&quot;/&gt;
<br>
-	                    &lt;/td&gt;
<br>
-	                &lt;/tr&gt;
<br>
-	                &lt;tr&gt;
<br>
-	                    &lt;td valign=&quot;top&quot;&gt;
<br>
-	                        &lt;font size=&quot;-2&quot; face=&quot;arial,sans-serif&quot; color=&quot;#6f6f6f&quot;&gt;
<br>
-	                        Minimum length - 8 letters.
<br>
-	                        &lt;/font&gt;
<br>
-	                    &lt;/td&gt;
<br>
-	                &lt;/tr&gt;
<br>
-	            &lt;/tbody&gt;
<br>
-	            &lt;/table&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/td&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;
<br>
Index: server/gds/templates/login.html
<br>
===================================================================
<br>
--- server/gds/templates/login.html	(revision 1349)
<br>
+++ server/gds/templates/login.html	(working copy)
<br>
@@ -41,7 +41,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;table cellspacing=&quot;0&quot; cellpadding=&quot;5&quot; width=&quot;100%&quot; bgcolor=&quot;#ffffff&quot; border=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td valign=&quot;top&quot; nowrap=&quot;nowrap&quot;&gt;
<br>
-                User name (login):
<br>
+                User name (Google account):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/td&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td valign=&quot;top&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input  type=&quot;text&quot; name=&quot;username_&quot;  id=&quot;username_id&quot; size=&quot;30&quot; value=&quot;&quot; maxlength=&quot;255&quot; class=&quot;editbox&quot;/&gt;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0499.php">Mike Dubman: "Re: [MTT devel] MTT GDS -- one more..."</a>
<li><strong>Previous message:</strong> <a href="0497.php">Jeff Squyres: "Re: [MTT devel] GDS errors"</a>
<li><strong>In reply to:</strong> <a href="0496.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0500.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0500.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/03/0501.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
