Index: client/bquery.pl
===================================================================
--- client/bquery.pl	(revision 1349)
+++ client/bquery.pl	(working copy)
@@ -143,7 +143,7 @@
 my $opt_format;
 my $opt_mailto;
 
-my @opt_newuser;
+my $opt_newuser;
 
 GetOptions ("help|h" => \$opt_help,
             "server|a=s" => \$opt_server,
@@ -172,7 +172,7 @@
             "format|V=s" => \$opt_format,
             "email|e=s" => \$opt_mailto,
 
-            "newuser=s{3,5}" => \@opt_newuser
+            "newuser=s" => \$opt_newuser
             );
 
 
@@ -426,10 +426,7 @@
 }
 elsif ($opt_admin)
 {
-    if ($#opt_newuser > 0) 
-    {
-        $conf{newuser} = \@opt_newuser;
-    }
+    $conf{newuser} = $opt_newuser;
  
     admin( \%conf ); 
 }
@@ -544,7 +541,7 @@
     }
     if (!defined($action) || $action eq '' || $action eq 'admin')
     {
-        printf (" %-5s %-10s\t%-s\n", '', '--newuser', "User information as username, password, email (mandatory) and first_name, last_name (optional). Keep order of values.");
+        printf (" %-5s %-10s\t%-s\n", '', '--newuser', "User information as username (Google account).");
     }
     if (!defined($action) || $action eq '' || $action eq 'update')
     {
@@ -851,7 +848,7 @@
     $ua->agent("bquery.pl:admin");
 
     my $request;
-    if (exists($conf_ref->{newuser}) && $#{$conf_ref->{newuser}} >=2)
+    if (exists($conf_ref->{newuser}))
     {
         $request = POST(
                     $conf_ref->{url},
@@ -859,11 +856,7 @@
                     Content => [
                             ADMIN       => 1,
                             _NEWUSER_   => 1,
-                            username    => $conf_ref->{newuser}->[0],
-                            password    => $conf_ref->{newuser}->[1],
-                            email       => $conf_ref->{newuser}->[2],
-                            first_name  => ($#{$conf_ref->{newuser}} >=3 ? $conf_ref->{newuser}->[3] : ''),
-                            last_name   => ($#{$conf_ref->{newuser}} >=4 ? $conf_ref->{newuser}->[4] : ''),
+                            username    => $conf_ref->{newuser},
                             description => 'bquery admin'
                              ]);
     }
Index: server/gds/admin/admin.py
===================================================================
--- server/gds/admin/admin.py	(revision 1349)
+++ server/gds/admin/admin.py	(working copy)
@@ -69,10 +69,6 @@
             status = 401
         else:
             user = auth.add_user(username = self.request.get('username_'),
-                                 password = self.request.get('password_'),
-                                 email = self.request.get('email_'),
-                                 first_name = self.request.get('first_name_'),
-                                 last_name = self.request.get('last_name_'),
                                  is_superuser = self.request.get('is_superuser_')
                                  )
             
Index: server/gds/app.yaml
===================================================================
--- server/gds/app.yaml	(revision 1349)
+++ server/gds/app.yaml	(working copy)
@@ -7,8 +7,8 @@
 # $HEADER$
 #
 
-application: vbench-dev
-version: 8
+application: open-mpi-mtt
+version: 2
 runtime: python
 api_version: 1
 
Index: server/gds/auth/__init__.py
===================================================================
--- server/gds/auth/__init__.py	(revision 1349)
+++ server/gds/auth/__init__.py	(working copy)
@@ -32,9 +32,18 @@
         logging.debug('check_login %s: <%s> admin = %s user = %s' % 
                       (self.__class__.__name__, self.request.method, str(users.is_current_user_admin()), str(self.user)))
 
+        user = users.get_current_user()
+        
+        if not user:
+            greeting = ("<a href=\"%s\">Sign in or register</a>." %
+                  users.create_login_url("/"))
+            self.response.set_status(401) # Unauthorized
+            self.response.out.write("<html><body>%s</body></html>" % greeting)
+            return
+        
         if not users.is_current_user_admin() and self.user is None:
             if self.request.method == 'GET':
-                credential = [self.request.get('username'), self.request.get('password')]
+                credential = [user.email(), None]
                 self.user = authenticate(credential)
                 if self.user is None:
                     self.redirect('%s?%s=%s' % ('/login/', 'next', urllib.quote(self.request.uri)))
@@ -86,9 +95,8 @@
     users = query.filter('is_active =', True)
     user = users.get()
 
-    if user:
-        if ((not user.check_password(raw_password = credential[1], password = user.password)) and
-            (user.password != credential[1])): 
+    if user and credential[1] is not None:
+        if (not user.check_password(raw_password = credential[1])): 
             user = None
 
     logging.debug('authenticate: %s' % str(user))
@@ -103,25 +111,14 @@
     logging.debug('add_user: %s' % str(credential))
 
     user = None
-    email_re = re.compile(r'[\w\d\.\-\+]+@[\w\d\.\-\+]+\.[\w\d\.\-\+]+')
-    if (not credential.has_key('email') or 
-        not email_re.match(credential['email'])):
-        logging.error("Invalid email = '%s'" % (credential['email']))
-        return user
         
     query = db.Query(User)
     query_users = query.filter('username =', credential['username'])
     if query_users.count()>1:
         logging.error("There are several users with username = '%s' and email = '%s'" % (credential['username'], credential['email']))
         user = query_users.get()   
-    elif (credential.has_key('username') and 
-          credential.has_key('password')):
-        user = User(username = credential['username'],
-                    email = credential['email']
-                    )
-        user.set_password(credential['password'])
-        if (credential.has_key('first_name')): user.first_name = credential['first_name']
-        if (credential.has_key('last_name')): user.last_name = credential['last_name']
+    elif (credential.has_key('username')):
+        user = User(username = credential['username'])
         if (credential.has_key('is_superuser') and
             credential['is_superuser'].lower() in ('yes', 'true')): user.is_superuser = True
         else:
Index: server/gds/auth/models.py
===================================================================
--- server/gds/auth/models.py	(revision 1349)
+++ server/gds/auth/models.py	(working copy)
@@ -21,10 +21,6 @@
 
 class User(db.Model):
     username     = db.StringProperty(required=True)
-    password     = db.StringProperty()
-    email        = db.EmailProperty(required=True)
-    first_name   = db.StringProperty()
-    last_name    = db.StringProperty()
     is_superuser = db.BooleanProperty(default=False)
     is_active    = db.BooleanProperty(default=True)
     last_login   = db.DateTimeProperty()
@@ -42,17 +38,23 @@
         full_name = '%s %s' % (self.first_name, self.last_name)
         return full_name.strip()
        
-    def set_password(self, raw_password):
-        import sha, random
+    def check_password(self, raw_password):
+        import urllib
+        import logging
+        from google.appengine.api import urlfetch 
         
-        algorithm = 'sha1'
-        salt = sha.new(str(random.random())).hexdigest()[:5]
-        hash = sha.new(salt+raw_password).hexdigest()
-            
-        self.password = '|'.join((algorithm, hash, salt))
-       
-    def check_password(self, raw_password, password):
-        import sha
-              
-        (algorithm, hash, salt) = self.password.split('|')
-        return hash == sha.new(salt + raw_password).hexdigest()
+        request_body = urllib.urlencode({'Email': self.username,
+                                         'Passwd': raw_password,
+                                         'accountType': 'HOSTED_OR_GOOGLE',
+                                         'service': 'ah',
+                                         'source': 'test'})
+        auth_response = urlfetch.fetch('https://www.google.com/accounts/ClientLogin',
+                                       method=urlfetch.POST,
+                                       headers={'Content-type':'application/x-www-form-urlencoded',
+                                                'Content-Length':
+                                                    str(len(request_body))},
+                                       payload=request_body)
+        auth_dict = dict(x.split("=") for x in auth_response.content.split("\n") if x)
+        auth_token = auth_dict.has_key("Auth")
+
+        return auth_token
Index: server/gds/main.py
===================================================================
--- server/gds/main.py	(revision 1349)
+++ server/gds/main.py	(working copy)
@@ -150,13 +150,7 @@
             status = 401    # Unauthorized
             
         else:
-            query = {}
-            query['username'] = user.username
-            query['password'] = user.password
-            url = '%s?%s' % (self.request.get('next') , 
-                             '&'.join('%s=%s' % (urllib.quote_plus(k.encode('utf8')),
-                                                 urllib.quote_plus(v.encode('utf8')))
-                             for k, v in query.iteritems()))
+            url = '%s' % (self.request.get('next'))
             status = 302    # Found
         
         self.response.set_status(status)        
@@ -952,11 +946,7 @@
         status = 0
         if 'ADMIN' in self.request.arguments():
             if ('_NEWUSER_' in self.request.arguments()):                
-                user = auth.add_user(username = self.request.get('username'),
-                                     password = self.request.get('password'),
-                                     email = self.request.get('email'),
-                                     first_name = self.request.get('first_name'),
-                                     last_name = self.request.get('last_name'))
+                user = auth.add_user(username = self.request.get('username'))
                 if user is None:
                     status = 400
                 else:                   
@@ -1001,8 +991,18 @@
                             query = db.GqlQuery(query_str)
                             result_set = query
 
+                            excluded_list = [ 
+                                     'submitinfo',
+                                     'clusterinfo',
+                                     'mpiinfo',
+                                     'compilerinfo',
+                                     'suiteinfo',
+                                     'mpiinstallphase',
+                                     'testbuildphase',
+                                     'data_file'
+                                     ]
                             for entity in result_set:
-                                self.__fill_entity(entity, key_dict)
+                                self.__fill_entity(entity, key_dict, excluded_list, True)
                                 entity.put()
                                 
                     except (datastore_errors.BadQueryError, datastore_errors.BadArgumentError, datastore_errors.BadRequestError, datastore_errors.BadRequestError, datastore_errors.BadFilterError, db.KindError), err:
@@ -1122,53 +1122,68 @@
     value from one of the entities for the key name.
     """
     key_dict = {}
+    key_dict['_id_'] = []
+    key_dict['_key_'] = []
     for entity in entities:
-        if key_dict.has_key('_key_'):
-            key_dict['_id_'].append(str(entity.key().id()))
-            key_dict['_key_'].append(str(entity.key()))
-        else:
-            key_dict['_id_'] = [str(entity.key().id())]
-            key_dict['_key_'] = [str(entity.key())]
         for prop in entity.properties().values():
-            val = prop.get_value_for_datastore(entity)
-
-            if (datastore.typename(prop) in ['BlobProperty']):
-                val = 'blob'
-            elif (datastore.typename(prop) in ['ReferenceProperty']):
-                val = str(val)
-            elif (datastore.typename(prop) in ['EmailProperty', 'BooleanProperty']):
-                val = str(val)
-            elif (datastore.typename(prop) in ['TextProperty']):
-                val = unicode(val)
+            if not key_dict.has_key(prop):
+                key_dict[prop.name] = []
+        for prop in entity.dynamic_properties():
+            if not key_dict.has_key(prop):
+                key_dict[prop] = []
                 
-            if val is None or val == 'unknown':
-                val = ''
-
-            if key_dict.has_key(prop.name):
-                key_dict[prop.name].append(str(val))
+    for entity in entities:            
+        for key in key_dict.keys():
+            if key in ['_id_']:
+                key_dict['_id_'].append(str(entity.key().id()))
+            elif key in ['_key_']:
+                key_dict['_key_'].append(str(entity.key()))
+                    
+            elif key in entity.properties():
+                prop = entity.properties()[key]
+                
+                val = prop.get_value_for_datastore(entity)
+    
+                if (datastore.typename(prop) in ['BlobProperty']):
+                    val = 'blob'
+                elif (datastore.typename(prop) in ['ReferenceProperty']):
+                    val = str(val)
+                elif (datastore.typename(prop) in ['EmailProperty', 'BooleanProperty']):
+                    val = str(val)
+                elif (datastore.typename(prop) in ['TextProperty']):
+                    val = unicode(val)
+                    
+                if val is None or val == 'unknown':
+                    val = ''
+    
+                if key_dict.has_key(key):
+                    key_dict[key].append(str(val))
+                else:
+                    key_dict[key] = [str(val)]
+    
+            elif key in entity.dynamic_properties():
+                val = entity.__getattr__(key)
+    
+                if (type(val).__name__ in ['Blob']):
+                    val = 'blob'
+                elif (type(val).__name__ in ['Key']):
+                    val = str(val)
+                elif (type(val).__name__ in ['Email', 'bool']):
+                    val = str(val)
+                elif (type(val).__name__ in ['Text']):
+                    val = unicode(val)
+    
+                if val is None or val == 'unknown':
+                    val = ''
+    
+                if key_dict.has_key(key):
+                    key_dict[key].append(str(val))
+                else:
+                    key_dict[key] = [str(val)]
+                    
             else:
-                key_dict[prop.name] = [str(val)]
+                key_dict[key].append('')
 
-        for prop in entity.dynamic_properties():
-            val = entity.__getattr__(prop)
-
-            if (type(val).__name__ in ['Blob']):
-                val = 'blob'
-            elif (type(val).__name__ in ['Key']):
-                val = str(val)
-            elif (type(val).__name__ in ['Email', 'bool']):
-                val = str(val)
-            elif (type(val).__name__ in ['Text']):
-                val = unicode(val)
-
-            if val is None or val == 'unknown':
-                val = ''
-
-            if key_dict.has_key(prop):
-                key_dict[prop].append(str(val))
-            else:
-                key_dict[prop] = [str(val)]
-
     return key_dict
 
 
Index: server/gds/templates/admin.html
===================================================================
--- server/gds/templates/admin.html	(revision 1349)
+++ server/gds/templates/admin.html	(working copy)
@@ -46,32 +46,8 @@
 	    </tr>
 	    <tr>
 	        <td nowrap="nowrap" valign="top">
-	            First name:
+	            User name (Google account):
 	        </td>
-	        <td>
-	            <input  type="text" name="first_name_"  id="first_name_id" size="30" value="" maxlength="255" class="editbox"/>
-	        </td>
-	    </tr>
-	    <tr>
-	        <td nowrap="nowrap" valign="top">
-	            Last name:
-	        </td>
-	        <td>
-	            <input  type="text" name="last_name_"  id="last_name_id" size="30" value="" maxlength="255" class="editbox"/>
-	        </td>
-	    </tr>
-        <tr>
-            <td nowrap="nowrap" valign="top">
-                E-mail:
-            </td>
-            <td>
-                <input  type="text" name="email_"  id="email_id" size="30" value="" maxlength="255" class="editbox"/>
-            </td>
-        </tr>
-	    <tr>
-	        <td nowrap="nowrap" valign="top">
-	            User name (login):
-	        </td>
 	        <td valign="top">
 	            <table cellpadding="0" bgcolor="#ffffff" cellspacing="0" border="0">
 	            <tbody>
@@ -84,7 +60,7 @@
 	                    <td align='left' >
 	                        <font size="-1">
 	                        <input  type="checkbox" name="is_superuser_" id="is_superuser_id" value="true"/>
-	                        Is user an administrator  
+	                        Is user an MTT administrator  
 	                        </font>
 	                    </td>
 	                </tr>
@@ -94,25 +70,8 @@
 	    </tr>
 	    <tr>
 	        <td valign="top" width="1%" nowrap="nowrap">
-	            Password:&nbsp;&nbsp;
 	        </td>
 	        <td valign="top">
-	            <table cellpadding="0" bgcolor="#ffffff" cellspacing="0" border="0">
-	            <tbody>
-	                <tr>
-	                    <td valign="top">
-	                        <input  type="password" name="password_" id="password_id" size="30" maxlength="255" class="editbox"/>
-	                    </td>
-	                </tr>
-	                <tr>
-	                    <td valign="top">
-	                        <font size="-2" face="arial,sans-serif" color="#6f6f6f">
-	                        Minimum length - 8 letters.
-	                        </font>
-	                    </td>
-	                </tr>
-	            </tbody>
-	            </table>
 	        </td>
 	    </tr>
 	    <tr>
Index: server/gds/templates/login.html
===================================================================
--- server/gds/templates/login.html	(revision 1349)
+++ server/gds/templates/login.html	(working copy)
@@ -41,7 +41,7 @@
 	<table cellspacing="0" cellpadding="5" width="100%" bgcolor="#ffffff" border="0">
         <tr>
             <td valign="top" nowrap="nowrap">
-                User name (login):
+                User name (Google account):
             </td>
             <td valign="top">
                 <input  type="text" name="username_"  id="username_id" size="30" value="" maxlength="255" class="editbox"/>