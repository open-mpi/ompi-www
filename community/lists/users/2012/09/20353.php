<?
$subject_val = "Re: [OMPI users] About MPI_TAG_UB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 28 10:37:55 2012" -->
<!-- isoreceived="20120928143755" -->
<!-- sent="Fri, 28 Sep 2012 10:38:26 -0400" -->
<!-- isosent="20120928143826" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="sebastien.boisvert.3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About MPI_TAG_UB" -->
<!-- id="5065B662.2080506_at_ulaval.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CFD04347-4FAA-4C5D-A9CB-BC3C765CD333_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] About MPI_TAG_UB<br>
<strong>From:</strong> S&#233;bastien Boisvert (<em>sebastien.boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-28 10:38:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20354.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Previous message:</strong> <a href="20352.php">Iliev, Hristo: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>In reply to:</strong> <a href="20351.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20354.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Reply:</strong> <a href="20354.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>On 28/09/12 10:00 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 28, 2012, at 9:50 AM, S&#233;bastien Boisvert wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I did not know about shared queues.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It does not run out of memory. ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It runs out of *registered* memory, which could be far less than your actual RAM.  Check this FAQ item in particular:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I see.
<br>
<p>$ cat /sys/module/mlx4_core/parameters/log_num_mtt
<br>
0
<br>
<p>$ cat /sys/module/mlx4_core/parameters/log_mtts_per_seg
<br>
0
<br>
<p>$ getconf PAGE_SIZE
<br>
4096
<br>
<p>With the formula
<br>
<p>max_reg_mem = (2^log_num_mtt) * (2^log_mtts_per_seg) * PAGE_SIZE
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= (2^0) * (2^0) * 4096
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= 1     * 1     * 4096
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= 4096 bytes
<br>
<p>Whoa ! one page.
<br>
<p>That should help.
<br>
<p>There are 32 GiB of memory.
<br>
<p>So I will ask someone to set log_num_mtt=23 and log_mtts_per_seg=1.
<br>
<p>&nbsp;&nbsp;=&gt; 68719476736 = (2**23)*(2**1)*4096
<br>
<p><span class="quotelev2">&gt;&gt; But the latency is not very good.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ** Test 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl_openib_max_send_size 4096 \
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl_openib_eager_limit 4096 \
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl_openib_rndv_eager_limit 4096 \
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl_openib_receive_queues S,4096,2048,1024,32 \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get 1.5 milliseconds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  =&gt; <a href="https://gist.github.com/3799889">https://gist.github.com/3799889</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ** Test 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl_openib_receive_queues S,65536,256,128,32 \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get around 1.5 milliseconds too.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  =&gt; <a href="https://gist.github.com/3799940">https://gist.github.com/3799940</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you saying 1.5us is bad?  
</span><br>
<p>1.5 us is very good. But I get 1.5 ms with shared queues (see above).
<br>
<p><span class="quotelev1">&gt; That's actually not bad at all.  On the most modern hardware with a bunch of software tuning, you can probably get closer to 1us.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With my virtual router I am sure I can get something around 270 microseconds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OTOH, that's pretty bad.  :-)
</span><br>
<p>I know, all my Ray processes are doing busy waiting, if MPI was event-driven,
<br>
I would call my software sleepy Ray when latency is high.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure why it would be so bad -- are you hammering the virtual router with small incoming messages?
</span><br>
<p>There are 24 AMD Opteron(tm) Processor 6172 cores for 1 Mellanox Technologies MT26428
<br>
on each node. That may be the cause too.
<br>
<p><span class="quotelev1">&gt;  You might need to do a little profiling to see where the bottlenecks are.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Well, with the very valuable information you provided about log_num_mtt and log_mtts_per_seg
<br>
for the Linux kernel module mlx4_core, I think this may be the root of our problem.
<br>
<p>We get 20-30 us on 4096 processes on Cray XE6, so it is unlikely that the bottleneck is in 
<br>
our software.
<br>
<p><span class="quotelev2">&gt;&gt; Just out of curiosity, does Open-MPI utilize heavily negative values
</span><br>
<span class="quotelev2">&gt;&gt; internally for user-provided MPI tags ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know offhand we use them for collectives.  Something is tickling my brain that we use them for other things, too (CID allocation, perhaps?), but I don't remember offhand.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>The only collective I use is a few MPI_Barrier. 
<br>
<p><span class="quotelev1">&gt; I'm just saying: YMMV.  Buyer be warned.  And all that. :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Yes, I agree on this, non-portable code is not portable and all with unexpected behaviors.
<br>
<p><span class="quotelev2">&gt;&gt; If the negative tags are internal to Open-MPI, my code will not touch
</span><br>
<span class="quotelev2">&gt;&gt; these private variables, right ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's not a variable that's the issue.  If you do a receive for tag -3 and OMPI sends an internal control message with tag -3, you might receive it instead of OMPI's core.  And that would be Bad.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Ah I see. By removing the checks in my silly patch, I can now dictate things to do to
<br>
OMPI. Hehe.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20354.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Previous message:</strong> <a href="20352.php">Iliev, Hristo: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>In reply to:</strong> <a href="20351.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20354.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Reply:</strong> <a href="20354.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
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
