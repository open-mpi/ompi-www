<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 18:55:55 2007" -->
<!-- isoreceived="20071031225555" -->
<!-- sent="Wed, 31 Oct 2007 18:55:47 -0400" -->
<!-- isosent="20071031225547" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Too many open files Error" -->
<!-- id="200710311855.47930.tprins_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4727BB1E.20705_at_infotech.monash.edu.au" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-31 18:55:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4374.php">George Bosilca: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Previous message:</strong> <a href="4372.php">Tim Prins: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>In reply to:</strong> <a href="4350.php">Clement Kam Man Chu: "[OMPI users] Too many open files Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4375.php">George Bosilca: "Re: [OMPI users] Too many open files Error"</a>
<li><strong>Reply:</strong> <a href="4375.php">George Bosilca: "Re: [OMPI users] Too many open files Error"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4385.php">Adrian Knoth: "Re: [OMPI users] Too many open files Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Clement,
<br>
<p>I seem to recall (though this may have changed) that if a system supports 
<br>
ipv6, we may open both ipv4 and ipv6 sockets. This can be worked around by 
<br>
configuring Open MPI with --disable-ipv6
<br>
<p>Other then that, I don't know of anything else to do except raise the limit 
<br>
for the number of open files.
<br>
<p>I know it doesn't help you now, but we are actively working on this problem 
<br>
for Open MPI 1.3. This version will introduce a tree routing scheme which 
<br>
will dramatically reduce the number of open sockets that the runtime system 
<br>
needs.
<br>
<p>Hope this helps,
<br>
<p>Tim
<br>
<p>On Tuesday 30 October 2007 07:15:42 pm Clement Kam Man Chu wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I got a &quot;Too many open files&quot; error while running over 1024 processes
</span><br>
<span class="quotelev1">&gt; on 512 cpus.  I found the same error on
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2006/11/2216.php">http://www.open-mpi.org/community/lists/users/2006/11/2216.php</a>, but I
</span><br>
<span class="quotelev1">&gt; would like to know whether it is another solution instead of changing
</span><br>
<span class="quotelev1">&gt; limit descriptors.  The limit descriptors is changed by root access and
</span><br>
<span class="quotelev1">&gt; needs to restart the system that I don't want to.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Clement
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4374.php">George Bosilca: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Previous message:</strong> <a href="4372.php">Tim Prins: "Re: [OMPI users] mpirun udapl problem"</a>
<li><strong>In reply to:</strong> <a href="4350.php">Clement Kam Man Chu: "[OMPI users] Too many open files Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4375.php">George Bosilca: "Re: [OMPI users] Too many open files Error"</a>
<li><strong>Reply:</strong> <a href="4375.php">George Bosilca: "Re: [OMPI users] Too many open files Error"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/11/4385.php">Adrian Knoth: "Re: [OMPI users] Too many open files Error"</a>
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
