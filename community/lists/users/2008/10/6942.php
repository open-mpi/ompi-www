<?
$subject_val = "Re: [OMPI users] Performance: MPICH2 vs OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 10 13:10:56 2008" -->
<!-- isoreceived="20081010171056" -->
<!-- sent="Fri, 10 Oct 2008 13:10:51 -0400" -->
<!-- isosent="20081010171051" -->
<!-- name="Brian Dobbins" -->
<!-- email="bdobbins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance: MPICH2 vs OpenMPI" -->
<!-- id="2b5e0c120810101010idc9808djb390d8ff1e4b9827_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F072C695-C00F-4C50-B5A3-6A9C96B75E32_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance: MPICH2 vs OpenMPI<br>
<strong>From:</strong> Brian Dobbins (<em>bdobbins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-10 13:10:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6943.php">George Bosilca: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Previous message:</strong> <a href="6941.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6940.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6990.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6990.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys,
<br>
<p>On Fri, Oct 10, 2008 at 12:57 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Actually I had a much differnt results,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gromacs-3.3.1  one node dual core dual socket opt2218  openmpi-1.2.7
</span><br>
<span class="quotelev1">&gt;  pgi/7.2
</span><br>
<span class="quotelev1">&gt; mpich2 gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&nbsp;&nbsp;&nbsp;For some reason, the difference in minutes didn't come through, it seems,
<br>
but I would guess that if it's a medium-large difference, then it has its
<br>
roots in PGI7.2 vs. GCC rather than MPICH2 vs. OpenMPI.  Though, to be fair,
<br>
I find GCC vs. PGI (for C code) is often a toss-up - one may beat the other
<br>
handily on one code, and then lose just as badly on another.
<br>
<p>I think my install of mpich2 may be bad, I have never installed it before,
<br>
<span class="quotelev1">&gt;  only mpich1, OpenMPI and LAM. So take my mpich2 numbers with salt, Lots of
</span><br>
<span class="quotelev1">&gt; salt.
</span><br>
<p><p>&nbsp;&nbsp;I think the biggest difference in performance with various MPICH2 install
<br>
comes from differences in the 'channel' used..  I tend to make sure that I
<br>
use the 'nemesis' channel, which may or may not be the default these days.
<br>
If not, though, most people would probably want it.  I think it has issues
<br>
with threading (or did ages ago?), but I seem to recall it being
<br>
considerably faster than even the 'ssm' channel.
<br>
<p>&nbsp;&nbsp;Sangamesh:  My advice to you would be to recompile Gromacs and specify, in
<br>
the *Gromacs* compile / configure, to use the same CFLAGS you used with
<br>
MPICH2.  Eg, &quot;-O2 -m64&quot;, whatever.  If you do that, I bet the times between
<br>
MPICH2 and OpenMPI will be pretty comparable for your benchmark case -
<br>
especially when run on a single processor.
<br>
<p>&nbsp;&nbsp;Cheers,
<br>
&nbsp;&nbsp;- Brian
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6942/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6943.php">George Bosilca: "Re: [OMPI users] Crashes over TCP/ethernet but not on shared memory"</a>
<li><strong>Previous message:</strong> <a href="6941.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6940.php">Brock Palen: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6990.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6990.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
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
