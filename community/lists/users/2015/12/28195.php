<?
$subject_val = "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 21 11:15:23 2015" -->
<!-- isoreceived="20151221161523" -->
<!-- sent="Mon, 21 Dec 2015 07:51:08 -0800" -->
<!-- isosent="20151221155108" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket" -->
<!-- id="0D296A1B-82F3-4A51-9E7A-A631EDE7FB3D_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAFb48S9C4O1VWr-E8wui-bJPF4KThz5eVXSsEO9xsfi0NsD7UA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-21 10:51:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28196.php">Matt Thompson: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
<li><strong>Previous message:</strong> <a href="28194.php">Siegmar Gross: "[OMPI users] openmpi-dev-3241-gc895eb7: wrong ELF class on Solaris"</a>
<li><strong>In reply to:</strong> <a href="28190.php">Matt Thompson: "[OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28196.php">Matt Thompson: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
<li><strong>Reply:</strong> <a href="28196.php">Matt Thompson: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try adding &#226;&#128;&#148;cpu-set a,b,c,&#226;&#128;&#166;  where the a,b,c&#226;&#128;&#166; are the core id&#226;&#128;&#153;s of your second socket. I&#226;&#128;&#153;m working on a cleaner option as this has come up before.
<br>
<p><p><span class="quotelev1">&gt; On Dec 21, 2015, at 5:29 AM, Matt Thompson &lt;fortran_at_[hidden] &lt;mailto:fortran_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear Open MPI Gurus,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm currently trying to do something with Open MPI 1.8.8 that I'm pretty sure is possible, but I'm just not smart enough to figure out. Namely, I'm seeing some odd GPU timings and I think it's because I was dumb and assumed the GPU was on the PCI bus next to Socket #0 as some older GPU nodes I ran on were like that. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, a trip through lspci and lstopo has shown me that the GPU is actually on Socket #1. These are dual socket Sandy Bridge nodes and I'd like to do some tests where I run a 8 processes per node and those processes all land on Socket #1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, what I'm trying to figure out is how to have Open MPI bind processes like that. My first thought as always is to run a helloworld job with -report-bindings on. I can manage to do this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1061) $ mpirun -np 8 -report-bindings -map-by core ./helloWorld.exe
</span><br>
<span class="quotelev1">&gt; [borg01z205:16306] MCW rank 4 bound to socket 0[core 4[hwt 0]]: [././././B/././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; [borg01z205:16306] MCW rank 5 bound to socket 0[core 5[hwt 0]]: [./././././B/./.][./././././././.]
</span><br>
<span class="quotelev1">&gt; [borg01z205:16306] MCW rank 6 bound to socket 0[core 6[hwt 0]]: [././././././B/.][./././././././.]
</span><br>
<span class="quotelev1">&gt; [borg01z205:16306] MCW rank 7 bound to socket 0[core 7[hwt 0]]: [./././././././B][./././././././.]
</span><br>
<span class="quotelev1">&gt; [borg01z205:16306] MCW rank 0 bound to socket 0[core 0[hwt 0]]: [B/././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; [borg01z205:16306] MCW rank 1 bound to socket 0[core 1[hwt 0]]: [./B/./././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; [borg01z205:16306] MCW rank 2 bound to socket 0[core 2[hwt 0]]: [././B/././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; [borg01z205:16306] MCW rank 3 bound to socket 0[core 3[hwt 0]]: [./././B/./././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; Process    7 of    8 is on borg01z205
</span><br>
<span class="quotelev1">&gt; Process    5 of    8 is on borg01z205
</span><br>
<span class="quotelev1">&gt; Process    2 of    8 is on borg01z205
</span><br>
<span class="quotelev1">&gt; Process    3 of    8 is on borg01z205
</span><br>
<span class="quotelev1">&gt; Process    4 of    8 is on borg01z205
</span><br>
<span class="quotelev1">&gt; Process    6 of    8 is on borg01z205
</span><br>
<span class="quotelev1">&gt; Process    0 of    8 is on borg01z205
</span><br>
<span class="quotelev1">&gt; Process    1 of    8 is on borg01z205
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Great...but wrong socket! Is there a way to tell it to use Socket 1 instead? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note I'll be running under SLURM, so I will only have 8 processes per node, so it shouldn't need to use Socket 0.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Matt Thompson
</span><br>
<span class="quotelev1">&gt; Man Among Men
</span><br>
<span class="quotelev1">&gt; Fulcrum of History
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28190.php">http://www.open-mpi.org/community/lists/users/2015/12/28190.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28195/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28196.php">Matt Thompson: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
<li><strong>Previous message:</strong> <a href="28194.php">Siegmar Gross: "[OMPI users] openmpi-dev-3241-gc895eb7: wrong ELF class on Solaris"</a>
<li><strong>In reply to:</strong> <a href="28190.php">Matt Thompson: "[OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28196.php">Matt Thompson: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
<li><strong>Reply:</strong> <a href="28196.php">Matt Thompson: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
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
