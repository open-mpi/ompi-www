<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 14 20:03:30 2005" -->
<!-- isoreceived="20051115010330" -->
<!-- sent="Mon, 14 Nov 2005 18:03:00 -0700" -->
<!-- isosent="20051115010300" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] 1.0rc5 is up" -->
<!-- id="op.sz9bvaifies9li_at_rygel.lnxi.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="op.sz899dl2ies9li_at_rygel.lnxi.com" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-14 20:03:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0340.php">Timothy S. Woodall: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Previous message:</strong> <a href="0338.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>In reply to:</strong> <a href="0338.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0340.php">Timothy S. Woodall: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 14 Nov 2005 17:28:15 -0700, Troy Telford  
<br>
&lt;ttelford_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I've just finished a build of RC7, so I'll go give that a whirl and  
</span><br>
<span class="quotelev1">&gt; report.
</span><br>
<p>RC7:
<br>
<p><p>With *both* mvapi and openib, I recieve the following when using IMB-MPI1:
<br>
<p>***mvapi***
<br>
[0,1,3][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress] error  
<br>
in posting pending send
<br>
[0,1,3][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress] error  
<br>
in posting pending send
<br>
[0,1,2][btl_mvapi_component.c:637:mca_btl_mvapi_component_progress] error  
<br>
in posting pending send
<br>
**openib***
<br>
[0,1,3][btl_openib_endpoint.c:134:mca_btl_openib_endpoint_post_send] error  
<br>
posting send request errno says Resource temporarily unavailable
<br>
[0,1,3][btl_openib_component.c:655:mca_btl_openib_component_progress]  
<br>
error in posting pending send
<br>
[0,1,2][btl_openib_endpoint.c:134:mca_btl_openib_endpoint_post_send] error  
<br>
posting send request errno says Resource temporarily unavailable
<br>
[0,1,2][btl_openib_component.c:655:mca_btl_openib_component_progress]  
<br>
error in posting pending send
<br>
[0,1,3][btl_openib_endpoint.c:134:mca_btl_openib_endpoint_post_send] error  
<br>
posting send request errno says Resource temporarily unavailable
<br>
[0,1,3][btl_openib_component.c:655:mca_btl_openib_component_progress]  
<br>
error in posting pending send
<br>
***********
<br>
<p>Notable is that they both fail in pretty much the same place (every time):
<br>
#----------------------------------------------------------------
<br>
# Benchmarking Reduce_scatter
<br>
# #processes = 4
<br>
# ( 4 additional processes waiting in MPI_Barrier)
<br>
#----------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.04         0.04         0.04
<br>
&lt;insert error here&gt;
<br>
<p>(sometimes it will finish having completed one more item -- ie. byte size  
<br>
of 4)
<br>
<p><p><p>HPL will run on mvapi, but on openib, it segfaults before completing the  
<br>
first problem size with:
<br>
mpirun noticed that job rank 0 with PID 25662 on node &quot;n57&quot; exited on  
<br>
signal 11.
<br>
<p>HPCC also segfaults when it gets to the HPL section of HPCC with OpenIB  
<br>
(with no additional info)
<br>
HPCC is still running on mvapi... so far so good...
<br>
<p>The Presta tests seem to still error out (similar to IMB) as previously  
<br>
reported; however it happens less frequently.  (Meaning, I've been able to  
<br>
complete the particular test successfully, then when I run it again, it  
<br>
fails -- something like a 50% success rate.)  This is with the 'com' and  
<br>
'allred' tests; 'globalop' has refused to run since RC5, and this has not  
<br>
changed with RC7.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0340.php">Timothy S. Woodall: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Previous message:</strong> <a href="0338.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>In reply to:</strong> <a href="0338.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0340.php">Timothy S. Woodall: "Re: [O-MPI users] 1.0rc5 is up"</a>
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
