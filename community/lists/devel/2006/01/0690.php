<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 18 16:40:09 2006" -->
<!-- isoreceived="20060118214009" -->
<!-- sent="Wed, 18 Jan 2006 16:39:48 -0500" -->
<!-- isosent="20060118213948" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Path detection patch" -->
<!-- id="9B4C54E9-BF0B-453C-9D06-8E9667685FC2_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-18 16:39:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0691.php">Brian Barrett: "Re:  ompi_get_version"</a>
<li><strong>Previous message:</strong> <a href="0689.php">Brian Barrett: "Re:  while-loop around opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0692.php">Ralf Wildenhues: "Re:  Path detection patch"</a>
<li><strong>Reply:</strong> <a href="0692.php">Ralf Wildenhues: "Re:  Path detection patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have some troubles on windows getting the correct path for the ompi  
<br>
installation directory as well as all tools used inside. We need this  
<br>
path in order to be able to use the wrappers compilers, to load the  
<br>
shared libraries and so on. I dig on the web and I come up with a  
<br>
solution. If involve replacing the path define (it's always a define  
<br>
for us) with a shell command. Depending on the OS this shell command  
<br>
will do the magic to setup correctly the path. Here is an example:
<br>
<p>Actual code:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-DOMPI_PKGLIBDIR=\&quot;$(pkglibdir)\&quot;
<br>
<p>Patched code:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-DOMPI_PKGLIBDIR=\&quot;&quot;`@PATH_CONVERTOR@ '$(pkglibdir)'`\&quot;&quot;
<br>
<p>On all UNIX flavors the PATH_CONVERTOR will be set to echo. On cygwin  
<br>
will be set to &quot;cygpath -m&quot; so we will get the correct windows path.  
<br>
I'm still looking on how to set it correctly on mingw.
<br>
<p>I attached the patch to this email. If you know or can find a  
<br>
simplest way I will be happy to hear about. As usual all comments are  
<br>
welcome :)
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>


<br><p>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<p><p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-0690/path.patch">path.patch</a>
</ul>
<!-- attachment="path.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0691.php">Brian Barrett: "Re:  ompi_get_version"</a>
<li><strong>Previous message:</strong> <a href="0689.php">Brian Barrett: "Re:  while-loop around opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0692.php">Ralf Wildenhues: "Re:  Path detection patch"</a>
<li><strong>Reply:</strong> <a href="0692.php">Ralf Wildenhues: "Re:  Path detection patch"</a>
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
