<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 17 12:56:03 2007" -->
<!-- isoreceived="20070117175603" -->
<!-- sent="Wed, 17 Jan 2007 11:56:33 -0600" -->
<!-- isosent="20070117175633" -->
<!-- name="Tim Campbell" -->
<!-- email="tim.campbell_at_[hidden]" -->
<!-- subject="[OMPI users] 1.2b3 man pages" -->
<!-- id="87E30915-46C3-4BEE-8F3B-057FA75947DA_at_nrlssc.navy.mil" -->
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
<strong>From:</strong> Tim Campbell (<em>tim.campbell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-17 12:56:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2484.php">Brian W. Barrett: "Re: [OMPI users] 1.2b3 man pages"</a>
<li><strong>Previous message:</strong> <a href="2482.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce.3: wrong description for use of MPI_IN_PLACE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2484.php">Brian W. Barrett: "Re: [OMPI users] 1.2b3 man pages"</a>
<li><strong>Reply:</strong> <a href="2484.php">Brian W. Barrett: "Re: [OMPI users] 1.2b3 man pages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just updated our local OpenMPI install from 1.2b2 to 1.2b3 and  
<br>
discovered that the man page setup is incomplete.  Here is a  
<br>
directory listing of the two installs to show what I mean.
<br>
<p>{/common/openmpi/pgi/1.2b2/man/man1}[27]% ls -l
<br>
total 99
<br>
lrwxrwxrwx  1 tjcamp commoners     8 Jan 11 11:37 mpic++.1 -&gt; opalcc.1*
<br>
lrwxrwxrwx  1 tjcamp commoners     8 Jan 11 11:37 mpicc.1 -&gt; opalcc.1*
<br>
lrwxrwxrwx  1 tjcamp commoners     8 Jan 11 11:37 mpiCC.1 -&gt; opalcc.1*
<br>
-rwxrwxr-x  1 tjcamp commoners 28485 Jan 11 11:37 mpiexec.1*
<br>
lrwxrwxrwx  1 tjcamp commoners     8 Jan 11 11:37 mpif77.1 -&gt; opalcc.1*
<br>
lrwxrwxrwx  1 tjcamp commoners     8 Jan 11 11:37 mpif90.1 -&gt; opalcc.1*
<br>
-rwxrwxr-x  1 tjcamp commoners 28485 Jan 11 11:37 mpirun.1*
<br>
lrwxrwxrwx  1 tjcamp commoners     8 Jan 11 11:37 opalc++.1 -&gt; opalcc.1*
<br>
-rwxrwxr-x  1 tjcamp commoners  7237 Jan 11 11:37 opalcc.1*
<br>
lrwxrwxrwx  1 tjcamp commoners     8 Jan 11 11:37 opalCC.1 -&gt; opalcc.1*
<br>
lrwxrwxrwx  1 tjcamp commoners     8 Jan 11 11:37 ortec++.1 -&gt; opalcc.1*
<br>
lrwxrwxrwx  1 tjcamp commoners     8 Jan 11 11:37 ortecc.1 -&gt; opalcc.1*
<br>
lrwxrwxrwx  1 tjcamp commoners     8 Jan 11 11:37 orteCC.1 -&gt; opalcc.1*
<br>
-rwxrwxr-x  1 tjcamp commoners 28485 Jan 11 11:37 orterun.1*
<br>
<p>{/common/openmpi/pgi/1.2b3/man/man1}[29]% ls -l
<br>
total 88
<br>
lrwxrwxrwx  1 tjcamp commoners     8 Jan 17 09:24 mpic++.1 -&gt; opalcc.1
<br>
lrwxrwxrwx  1 tjcamp commoners     8 Jan 17 09:24 mpicc.1 -&gt; opalcc.1
<br>
lrwxrwxrwx  1 tjcamp commoners     8 Jan 17 09:24 mpiCC.1 -&gt; opalcc.1
<br>
-rwxrwxr-x  1 tjcamp commoners 28485 Jan 17 09:24 mpiexec.1*
<br>
lrwxrwxrwx  1 tjcamp commoners     8 Jan 17 09:24 mpif77.1 -&gt; opalcc.1
<br>
lrwxrwxrwx  1 tjcamp commoners     8 Jan 17 09:24 mpif90.1 -&gt; opalcc.1
<br>
-rwxrwxr-x  1 tjcamp commoners 28485 Jan 17 09:24 mpirun.1*
<br>
-rwxrwxr-x  1 tjcamp commoners 28485 Jan 17 09:24 orterun.1*
<br>
<p>In the 1.2b3 build I notice that the opal* page links are not longer  
<br>
included.  Is this by design?  Also, and more importantly, the actual  
<br>
opalcc.1 man page which the links point to is not copied into the  
<br>
man1 directory.  I trace this to the addition (in 1.2b3) of  
<br>
WANT_INSTALL_HEADERS_TRUE to the man_MANS definition in opal/tools/ 
<br>
wrappers/Makefile.in.  I checked config.log and it shows that  
<br>
WANT_INSTALL_HEADERS_TRUE = '#', which results in man_MANS not being  
<br>
defined.  Is this a bug or should I be specifying something new (as  
<br>
compared to 1.2b2) when running configure.
<br>
<p>Thanks,
<br>
Tim Campbell
<br>
Naval Research Laboratory
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2484.php">Brian W. Barrett: "Re: [OMPI users] 1.2b3 man pages"</a>
<li><strong>Previous message:</strong> <a href="2482.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce.3: wrong description for use of MPI_IN_PLACE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2484.php">Brian W. Barrett: "Re: [OMPI users] 1.2b3 man pages"</a>
<li><strong>Reply:</strong> <a href="2484.php">Brian W. Barrett: "Re: [OMPI users] 1.2b3 man pages"</a>
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
