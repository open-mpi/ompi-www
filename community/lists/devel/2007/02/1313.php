<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb 19 09:00:19 2007" -->
<!-- isoreceived="20070219140019" -->
<!-- sent="Mon, 19 Feb 2007 09:00:13 -0500" -->
<!-- isosent="20070219140013" -->
<!-- name="Karl Dockendorf" -->
<!-- email="karld_at_[hidden]" -->
<!-- subject="[OMPI devel] mpicc Xcode 2.3 integration" -->
<!-- id="38D65BA4-4EC6-4664-B094-EA12A02B3F9A_at_ufl.edu" -->
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
<strong>From:</strong> Karl Dockendorf (<em>karld_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-19 09:00:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1314.php">jeevi tesh: "[OMPI devel] MPI FOR PERL"</a>
<li><strong>Previous message:</strong> <a href="1312.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13688"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
all,
<br>
<p>I thought I might pass along information on mpicc integration into  
<br>
Xcode (I currently use v2.3 and have not tested this on other  
<br>
versions).  Xcode has a compiler specification interface that --  
<br>
according to what ever internet websites exist on .pbcompspec files  
<br>
-- has not been released to the public.  Needless to say, one nights  
<br>
worth of rooting around in xcode compiler specification files led me  
<br>
to try this simple interface file.  Which, amazingly enough, works on  
<br>
my system (Mac OS 10.4.8).  Attached is the file &quot;MPICC.pbcompspec&quot;  
<br>
that should be placed in the &quot;/Library/Application Support/Apple/ 
<br>
Developer Tools/Specifications&quot; directory.  Upon starting Xcode this  
<br>
file is loaded and added to the list of compilers it knows about.
<br>
<p>To use the mpicc compiler, open your project, get info on your  
<br>
target, click the rules tab, and add a new entry.  Change the process  
<br>
rule for &quot;C source files&quot; and select using &quot;MPICC&quot;.  No more custom  
<br>
build scripts or changing linking flags with new mpi versions :)
<br>
<p>A few caveats.  In the file, the ExecPath parameter should be set to  
<br>
the location of your mpicc install.  A little more complicated issue  
<br>
is that the BasedOn parameter should -- probably -- refer to the gcc  
<br>
compiler version that mpicc calls.  (My system uses gcc-4.0.)
<br>
<p>I hope this helps anyone who's interested.
<br>
&#239;&#191;&#188;
<br>
<p>Karl Dockendorf
<br>
Ph.D. Candidate
<br>
Department of Biomedical Engineering
<br>
University of Florida
<br>
karld_at_[hidden]
<br>
<p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1313/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1313/MPICC.pbcompspec">MPICC.pbcompspec</a>
</ul>
<!-- attachment="MPICC.pbcompspec" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1313/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1314.php">jeevi tesh: "[OMPI devel] MPI FOR PERL"</a>
<li><strong>Previous message:</strong> <a href="1312.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r13688"</a>
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
