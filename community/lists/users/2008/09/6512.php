<?
$subject_val = "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 11 14:38:52 2008" -->
<!-- isoreceived="20080911183852" -->
<!-- sent="Thu, 11 Sep 2008 14:38:48 -0400" -->
<!-- isosent="20080911183848" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2" -->
<!-- id="48C965B8.6020107_at_neuralbs.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7110E2D0-EB89-4293-A241-8487174B4788_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2<br>
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-11 14:38:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6513.php">Ralph Castain: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6511.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6511.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6513.php">Ralph Castain: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6513.php">Ralph Castain: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6514.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>In short:
<br>
<p>Which of the 3 options is the one known to be unstable in the following:
<br>
<p>&nbsp;&nbsp;--enable-mpi-threads    Enable threads for MPI applications (default:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;disabled)
<br>
&nbsp;&nbsp;--enable-progress-threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enable threads asynchronous communication progress
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(default: disabled)
<br>
&nbsp;&nbsp;--with-threads          Set thread type (solaris / posix)
<br>
<p>?
<br>
<p>In long (rationale):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Just to make sure we don't contradict each other, you're suggesting 
<br>
the use of 'listen_thread' but, at the same time I'm telling Prasanna to 
<br>
_disable_ threads the threads USE flag which translates into the 
<br>
following logic (in the package):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if use threads; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;myconf=&quot;${myconf}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-progress-threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-threads=posix&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
<p>The decision was made based on the configure --help information (most 
<br>
probably from the 1.1 series), which lead to arbitrarily 
<br>
enabling/disabling all that has to do with threads using a single 
<br>
keyword. Now, based on :
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/wiki/ThreadSafetySupport">https://svn.open-mpi.org/trac/ompi/wiki/ThreadSafetySupport</a>
<br>
<p>So, is it only --enable-mpi-threads that is unstable in the &quot;*thread*&quot; 
<br>
options?
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 10, 2008, at 9:29 PM, Prasanna Ranganathan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have upgraded to 1.2.7 and am still noticing the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, we didn't change anything with regards to OOB and TCP from 1.2.6 
</span><br>
<span class="quotelev1">&gt; -&gt; 1.2.7, but it's still good to be at the latest version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try running with this MCA parameter:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mpirun --mca oob_tcp_listen_mode listen_thread ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry; I forgot that we did not enable that option by default in the 
</span><br>
<span class="quotelev1">&gt; v1.2 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6513.php">Ralph Castain: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6511.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6511.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6513.php">Ralph Castain: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6513.php">Ralph Castain: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6514.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
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
