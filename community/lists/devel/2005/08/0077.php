<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug  4 10:19:54 2005" -->
<!-- isoreceived="20050804151954" -->
<!-- sent="Thu, 4 Aug 2005 11:19:48 -0400" -->
<!-- isosent="20050804151948" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="rsh pls changes" -->
<!-- id="e073761bd35d38c546b27e386ab17ae9_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-04 10:19:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0078.php">Jeff Squyres: "Re:  os x build"</a>
<li><strong>Previous message:</strong> <a href="0076.php">Brian Barrett: "Re:  broken rmgr?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In r6731, I added the first of three modifications to the rsh pls:
<br>
<p>1. If your remote shell is sh (i.e., plain Bourne shell -- *not* bash), 
<br>
the rsh pls will first invoke &quot;! [ -e ./.profile ] || . ./.profile&quot; 
<br>
before invoking the orted (because &quot;sh&quot; does not invoke *any* shell 
<br>
startup files on the remote node for non-interactive rsh/ssh logins -- 
<br>
see the LAM FAQ for details: 
<br>
<a href="http://www.lam-mpi.org/faq/category4.php3#question8">http://www.lam-mpi.org/faq/category4.php3#question8</a>).  This behavior 
<br>
has a long-standing precedent in LAM/MPI (about a decade or so).
<br>
<p>This gives the user the chance to setup PATH / LD_LIBRARY_PATH in their 
<br>
.profile.
<br>
<p>Two more changes will be coming soon:
<br>
<p>2. Right now, the rsh pls assumes that your shell on the remote node is 
<br>
the same as your shell on the local node.  So we look at the shell on 
<br>
the local node to determine if we need to source .profile on the remote 
<br>
node.  An enhancement to this is to allow the rsh pls to probe the 
<br>
shell on the remote node to accurately determine what it is (i.e., 
<br>
execute &quot;ssh node echo $SHELL&quot; and look at the output).  This also has 
<br>
a long-standing precedent in LAM/MPI.
<br>
<p>However, I think we can make the behavior described in #1 be the 
<br>
default (assume the remote shell is the same as the local shell) -- 
<br>
this is certainly the common case.  We can provide an MCA param for 
<br>
users who need the &quot;probe&quot; behavior (which we'll probably need it for 
<br>
multi-cell scenarios, for example).
<br>
<p>3. Rainer and I started on a new command line flag to orterun last 
<br>
week: --prefix &lt;dir&gt;.  This allows the user to specify the installation 
<br>
directory of Open MPI on the remote node, allowing us to set PATH and 
<br>
LD_LIBRARY_PATH on the remote node as necessary.  Hence, users don't 
<br>
need to modify their shell startup files (.bashrc, .profile, .cshrc, 
<br>
etc.) to specify the path to the Open MPI installation on the remote 
<br>
side.
<br>
<p>These last two features will take a bit of time to implement -- they're 
<br>
a little complicated.  #3 is actually more pressing than #2, and will 
<br>
probably be implemented first.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0078.php">Jeff Squyres: "Re:  os x build"</a>
<li><strong>Previous message:</strong> <a href="0076.php">Brian Barrett: "Re:  broken rmgr?"</a>
<!-- nextthread="start" -->
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
