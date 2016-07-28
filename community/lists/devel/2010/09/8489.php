<?
$subject_val = "[OMPI devel] New Romio for OpenMPI available in bitbucket";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 17 06:36:06 2010" -->
<!-- isoreceived="20100917103606" -->
<!-- sent="Fri, 17 Sep 2010 12:36:00 +0200" -->
<!-- isosent="20100917103600" -->
<!-- name="Pascal Deveze" -->
<!-- email="Pascal.Deveze_at_[hidden]" -->
<!-- subject="[OMPI devel] New Romio for OpenMPI available in bitbucket" -->
<!-- id="4C934490.7060304_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] New Romio for OpenMPI available in bitbucket<br>
<strong>From:</strong> Pascal Deveze (<em>Pascal.Deveze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-17 06:36:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8490.php">ananda.mudar_at_[hidden]: "[OMPI devel] Checkpoint is broken in trunk"</a>
<li><strong>Previous message:</strong> <a href="8488.php">Terry Dontje: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8518.php">Jeff Squyres: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<li><strong>Reply:</strong> <a href="8518.php">Jeff Squyres: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<li><strong>Reply:</strong> <a href="8568.php">Ashley Pittman: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>In charge of ticket 1888 (see at 
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1888">https://svn.open-mpi.org/trac/ompi/ticket/1888</a>) ,
<br>
I have put the resulting code in bitbucket at:
<br>
<a href="http://bitbucket.org/devezep/new-romio-for-openmpi/">http://bitbucket.org/devezep/new-romio-for-openmpi/</a>
<br>
<p>The work in this repo consisted in refreshing ROMIO to a newer
<br>
version: the one from the very last MPICH2 release (mpich2-1.3b1).
<br>
<p>Testing:
<br>
&nbsp;&nbsp;1. runs fine except one minor error (see the explanation below) on 
<br>
various FS.
<br>
&nbsp;&nbsp;2. runs fine with Lustre, but:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;. had to add a small patch in romio/adio/ad_lustre_open.c
<br>
&nbsp;&nbsp;3. see below how to efficiently run with Lustre.
<br>
<p>You are invited to test and send comments
<br>
<p>Enjoy !
<br>
<p>Pascal
<br>
<p>======== The minor error ===================
<br>
The test error.c fails because OpenMPI does not handle correctly the
<br>
&quot;two level&quot; error functions of ROMIO:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;error_code = MPIO_Err_create_code(MPI_SUCCESS, MPIR_ERR_RECOVERABLE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;myname, __LINE__, MPI_ERR_ARG,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;**iobaddisp&quot;, 0);
<br>
OpenMPI limits its view to MPI_ERR_ARG, but the real error is 
<br>
&quot;**iobaddisp&quot;.
<br>
<p>========= How to test performances with Lustre ===================
<br>
1) Compile with Lustre ADIO driver. For this, add the flag
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-io-romio-flags=&quot;--with-file-system=ufs+nfs+lustre&quot; to 
<br>
your configure command.
<br>
<p>2) Of course, you should have a Lustre file system mounted on all the 
<br>
nodes you will run on.
<br>
<p>3) Take an application like coll_perf.c (in the test directory). In this 
<br>
application, change the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;three dimensions to 1000, that will create a file of  4 GB (big 
<br>
files are required in order
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to reach good performances with Lustre).
<br>
<p>4) Put the highest possible striping_factor in the hint. For this, one 
<br>
solution is :
<br>
&nbsp;- If your Lustre file system have 16 OST, create a hint file with the 
<br>
following line:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;striping_factor 16
<br>
- Export the path to this file in the variable ROMIO_HINTS:
<br>
&nbsp;&nbsp;&nbsp;export ROMIO_HINTS=my_directory/my_hints
<br>
&nbsp;If you do not specify the striping_factor, Lustre will set the default 
<br>
value (often 2 only).
<br>
&nbsp;You can verify the striping_factor set by Lustre with the following 
<br>
command:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lfs getstripe &lt;file&gt; (look at the value of lmm_stripe_count)
<br>
&nbsp;&nbsp;Note: The striping_factor is set once at file creation and cannot be 
<br>
changed after.
<br>
<p>5) Run your test, specifying a file located in the Lustre file system.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8490.php">ananda.mudar_at_[hidden]: "[OMPI devel] Checkpoint is broken in trunk"</a>
<li><strong>Previous message:</strong> <a href="8488.php">Terry Dontje: "Re: [OMPI devel] NP64 _gather_ problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8518.php">Jeff Squyres: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<li><strong>Reply:</strong> <a href="8518.php">Jeff Squyres: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<li><strong>Reply:</strong> <a href="8568.php">Ashley Pittman: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
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
