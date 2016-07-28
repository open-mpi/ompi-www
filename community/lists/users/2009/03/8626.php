<?
$subject_val = "[OMPI users] OpenMPI 1.3.1 svn Debian trouble";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 28 12:37:32 2009" -->
<!-- isoreceived="20090328163732" -->
<!-- sent="Sun, 29 Mar 2009 00:37:24 +0800" -->
<!-- isosent="20090328163724" -->
<!-- name="Jerome BENOIT" -->
<!-- email="ml.jgmbenoit_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.3.1 svn Debian trouble" -->
<!-- id="49CE5244.2000607_at_mailsnare.net" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.3.1 svn Debian trouble<br>
<strong>From:</strong> Jerome BENOIT (<em>ml.jgmbenoit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-28 12:37:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8627.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<li><strong>Previous message:</strong> <a href="8625.php">Fran&#231;ois PELLEGRINI: "[OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8662.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 svn Debian trouble"</a>
<li><strong>Reply:</strong> <a href="8662.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 svn Debian trouble"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello List,
<br>
<p>I have just tried the current SVN Debian package:
<br>
it does not work even without firewall
<br>
<p>Please find in attachement my test files and the associated outputs.
<br>
<p>hth,
<br>
Jerome
<br>
<p>Manuel Prinz wrote:
<br>
<span class="quotelev1">&gt; Am Freitag, den 27.03.2009, 20:34 +0800 schrieb Jerome BENOIT:
</span><br>
<span class="quotelev2">&gt;&gt; I have just tried the Sid package (1.3-2), but it does not work properly
</span><br>
<span class="quotelev2">&gt;&gt; (when the firewall are off)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Though this should work, the version in Sid is broken in other respects.
</span><br>
<span class="quotelev1">&gt; I do not recommend using it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have just read that the current stable version for OpenMPI is now 1.3.1:
</span><br>
<span class="quotelev2">&gt;&gt; I will give it a try once it will be packaged in Sid.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm the Open MPI maintainer in Debian and am planning to upload a fixed
</span><br>
<span class="quotelev1">&gt; version soon, possible around middle of next week. (It has to be
</span><br>
<span class="quotelev1">&gt; coordinated with the release team.) There is a working version availble
</span><br>
<span class="quotelev1">&gt; in SVN (try &quot;debcheckout openmpi&quot;). You can either build it yourself or
</span><br>
<span class="quotelev1">&gt; I could build it for you. You can mail me in private if you'd like me to
</span><br>
<span class="quotelev1">&gt; do so. Please not that installing the new version will break other
</span><br>
<span class="quotelev1">&gt; MPI-related Debian packages. I can explain you the details in private
</span><br>
<span class="quotelev1">&gt; mail since I think this is off-topic for the list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Manuel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Jerome BENOIT
jgmbenoit_at_mailsnare_dot_net



</pre>
<p>
[green][[7042,1],6][../../../../../../ompi/mca/btl/tcp/btl_tcp_component.c:596:mca_btl_tcp_component_create_listen] bind() failed: Permission denied (13)
<br>
[green][[7042,1],5][../../../../../../ompi/mca/btl/tcp/btl_tcp_component.c:596:mca_btl_tcp_component_create_listen] bind() failed: Permission denied (13)
<br>
--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;Process 1 ([[7042,1],2]) is on host: violet
<br>
&nbsp;&nbsp;Process 2 ([[7042,1],5]) is on host: green
<br>
&nbsp;&nbsp;BTLs attempted: self sm tcp
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[violet:12941] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[green:13026] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 2 with PID 12941 on
<br>
node violet exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[blue:15300] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[indigo:12605] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[red:12874] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[orange:14888] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
*** before MPI was initialized
<br>
*** An error occurred in MPI_Init
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
*** before MPI was initialized
<br>
[yellow:11441] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[orange:14887] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
[yellow:11440] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
[violet:12932] 8 more processes have sent help message help-mca-bml-r2.txt / unreachable proc
<br>
[violet:12932] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
[violet:12932] 8 more processes have sent help message help-mpi-runtime / mpi_init:startup:internal-failure
<br>
<p><p>
<br><p>
/local/benoit
<br>
/scratch/benoit
<br>
/local/benoit
<br>
/local/benoit/FAKEROOT
<br>
<p><p><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8626/phello.c">phello.c</a>
</ul>
<!-- attachment="phello.c" -->
<hr>
<ul>
<li>application/x-sh attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8626/phello.sh">phello.sh</a>
</ul>
<!-- attachment="phello.sh" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8627.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<li><strong>Previous message:</strong> <a href="8625.php">Fran&#231;ois PELLEGRINI: "[OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8662.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 svn Debian trouble"</a>
<li><strong>Reply:</strong> <a href="8662.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.1 svn Debian trouble"</a>
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
