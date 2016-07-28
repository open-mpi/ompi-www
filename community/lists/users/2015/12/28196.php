<?
$subject_val = "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 21 11:41:30 2015" -->
<!-- isoreceived="20151221164130" -->
<!-- sent="Mon, 21 Dec 2015 11:40:59 -0500" -->
<!-- isosent="20151221164059" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket" -->
<!-- id="CAFb48S_RA-C5iOfhpznGeH_QU6NWM9fZ5a4XHvuPi7sE_+8g_w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="0D296A1B-82F3-4A51-9E7A-A631EDE7FB3D_at_open-mpi.org" -->
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
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-21 11:40:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28197.php">Saliya Ekanayake: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
<li><strong>Previous message:</strong> <a href="28195.php">Ralph Castain: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
<li><strong>In reply to:</strong> <a href="28195.php">Ralph Castain: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28197.php">Saliya Ekanayake: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
<li><strong>Reply:</strong> <a href="28197.php">Saliya Ekanayake: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Huh. That isn't in the Open MPI 1.8.8 mpirun man page. It is in Open MPI
<br>
1.10, so I'm guessing someone noticed it wasn't there. Explains why I
<br>
didn't try it out. I'm assuming this option is respected on all nodes?
<br>
<p>Note: a SmarterManThanI&#226;&#132;&#162; here at Goddard thought up this:
<br>
<p>#!/bin/bash
<br>
rank=0
<br>
for node in $(srun uname -n | sort); do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;rank $rank=$node slots=1:*&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;let rank+=1
<br>
done
<br>
<p>It does seem to work in synthetic tests so I'm trying it now in my real
<br>
job. I had to hack a few run scripts so I'll probably spend the next hour
<br>
debugging something dumb I did.
<br>
<p>What I'm wondering about all this is: can this be done with --slot-list?
<br>
Or, perhaps, does --slot-list even work?
<br>
<p>I have tried about 20 different variations of it, e.g., --slot-list 1:*,
<br>
--slot-list '1:*', --slot-list 1:0,1,2,3,4,5,6,7, --slot-list
<br>
1:8,9,10,11,12,13,14,15, --slot-list 8-15, &amp;c., and every time I seem to
<br>
trigger an error via help-rmaps_rank_file.txt. I tried to read
<br>
through opal_hwloc_base_slot_list_parse in the source, but my C isn't great
<br>
(see my gmail address name) so that didn't help. Might not even be the
<br>
right function, but I was just acking the code.
<br>
<p>Thanks,
<br>
Matt
<br>
<p><p>On Mon, Dec 21, 2015 at 10:51 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Try adding &#226;&#128;&#148;cpu-set a,b,c,&#226;&#128;&#166;  where the a,b,c&#226;&#128;&#166; are the core id&#226;&#128;&#153;s of your
</span><br>
<span class="quotelev1">&gt; second socket. I&#226;&#128;&#153;m working on a cleaner option as this has come up before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 21, 2015, at 5:29 AM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Open MPI Gurus,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm currently trying to do something with Open MPI 1.8.8 that I'm pretty
</span><br>
<span class="quotelev1">&gt; sure is possible, but I'm just not smart enough to figure out. Namely, I'm
</span><br>
<span class="quotelev1">&gt; seeing some odd GPU timings and I think it's because I was dumb and assumed
</span><br>
<span class="quotelev1">&gt; the GPU was on the PCI bus next to Socket #0 as some older GPU nodes I ran
</span><br>
<span class="quotelev1">&gt; on were like that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, a trip through lspci and lstopo has shown me that the GPU is actually
</span><br>
<span class="quotelev1">&gt; on Socket #1. These are dual socket Sandy Bridge nodes and I'd like to do
</span><br>
<span class="quotelev1">&gt; some tests where I run a 8 processes per node and those processes all land
</span><br>
<span class="quotelev1">&gt; on Socket #1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, what I'm trying to figure out is how to have Open MPI bind processes
</span><br>
<span class="quotelev1">&gt; like that. My first thought as always is to run a helloworld job with
</span><br>
<span class="quotelev1">&gt; -report-bindings on. I can manage to do this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1061) $ mpirun -np 8 -report-bindings -map-by core ./helloWorld.exe
</span><br>
<span class="quotelev1">&gt; [borg01z205:16306] MCW rank 4 bound to socket 0[core 4[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [././././B/././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; [borg01z205:16306] MCW rank 5 bound to socket 0[core 5[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././B/./.][./././././././.]
</span><br>
<span class="quotelev1">&gt; [borg01z205:16306] MCW rank 6 bound to socket 0[core 6[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [././././././B/.][./././././././.]
</span><br>
<span class="quotelev1">&gt; [borg01z205:16306] MCW rank 7 bound to socket 0[core 7[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././././B][./././././././.]
</span><br>
<span class="quotelev1">&gt; [borg01z205:16306] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; [borg01z205:16306] MCW rank 1 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./B/./././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; [borg01z205:16306] MCW rank 2 bound to socket 0[core 2[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [././B/././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; [borg01z205:16306] MCW rank 3 bound to socket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././B/./././.][./././././././.]
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
<span class="quotelev1">&gt; Great...but wrong socket! Is there a way to tell it to use Socket 1
</span><br>
<span class="quotelev1">&gt; instead?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note I'll be running under SLURM, so I will only have 8 processes per
</span><br>
<span class="quotelev1">&gt; node, so it shouldn't need to use Socket 0.
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Matt Thompson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Man Among Men
</span><br>
<span class="quotelev1">&gt; Fulcrum of History
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/12/28190.php">http://www.open-mpi.org/community/lists/users/2015/12/28190.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/12/28195.php">http://www.open-mpi.org/community/lists/users/2015/12/28195.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Matt Thompson
Man Among Men
Fulcrum of History
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28196/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28197.php">Saliya Ekanayake: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
<li><strong>Previous message:</strong> <a href="28195.php">Ralph Castain: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
<li><strong>In reply to:</strong> <a href="28195.php">Ralph Castain: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28197.php">Saliya Ekanayake: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
<li><strong>Reply:</strong> <a href="28197.php">Saliya Ekanayake: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
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
