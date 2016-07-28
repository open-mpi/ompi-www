<?
$subject_val = "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 21 12:21:53 2015" -->
<!-- isoreceived="20151221172153" -->
<!-- sent="Mon, 21 Dec 2015 12:21:51 -0500" -->
<!-- isosent="20151221172151" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket" -->
<!-- id="CA+ssbKUyPVebzp+qZr4_2s1GtAR-L_0LPi9y95of1jNQGh1y5A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAFb48S_RA-C5iOfhpznGeH_QU6NWM9fZ5a4XHvuPi7sE_+8g_w_at_mail.gmail.com" -->
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
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-21 12:21:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28198.php">Thomas Jahns: "Re: [OMPI users] openmpi-1.10.2rc1: wrong ELF class on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28196.php">Matt Thompson: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
<li><strong>In reply to:</strong> <a href="28196.php">Matt Thompson: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried the following with OpenMPI 1.8.1 and 1.10.1. The both worked. In my
<br>
case a node has 2 sockets like yours, but each socket has 12 cores and
<br>
lstopo showed core numbers for the second socket are from 12 to 23.
<br>
<p>* mpirun --report-bindings --bind-to core --cpu-set 12,13,14,15,16,17,18,19
<br>
-np 8 java Hello*
<br>
<p>[j-049:182867] MCW rank 0 bound to socket 1[core 12[hwt 0-1]]:
<br>
[../../../../../../../../../../../..][BB/../../../../../../../../../../..]
<br>
[j-049:182867] MCW rank 1 bound to socket 1[core 13[hwt 0-1]]:
<br>
[../../../../../../../../../../../..][../BB/../../../../../../../../../..]
<br>
[j-049:182867] MCW rank 2 bound to socket 1[core 14[hwt 0-1]]:
<br>
[../../../../../../../../../../../..][../../BB/../../../../../../../../..]
<br>
[j-049:182867] MCW rank 3 bound to socket 1[core 15[hwt 0-1]]:
<br>
[../../../../../../../../../../../..][../../../BB/../../../../../../../..]
<br>
[j-049:182867] MCW rank 4 bound to socket 1[core 16[hwt 0-1]]:
<br>
[../../../../../../../../../../../..][../../../../BB/../../../../../../..]
<br>
[j-049:182867] MCW rank 5 bound to socket 1[core 17[hwt 0-1]]:
<br>
[../../../../../../../../../../../..][../../../../../BB/../../../../../..]
<br>
[j-049:182867] MCW rank 6 bound to socket 1[core 18[hwt 0-1]]:
<br>
[../../../../../../../../../../../..][../../../../../../BB/../../../../..]
<br>
[j-049:182867] MCW rank 7 bound to socket 1[core 19[hwt 0-1]]:
<br>
[../../../../../../../../../../../..][../../../../../../../BB/../../../..]
<br>
<p><p><p>On Mon, Dec 21, 2015 at 11:40 AM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Huh. That isn't in the Open MPI 1.8.8 mpirun man page. It is in Open MPI
</span><br>
<span class="quotelev1">&gt; 1.10, so I'm guessing someone noticed it wasn't there. Explains why I
</span><br>
<span class="quotelev1">&gt; didn't try it out. I'm assuming this option is respected on all nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note: a SmarterManThanI&#226;&#132;&#162; here at Goddard thought up this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; rank=0
</span><br>
<span class="quotelev1">&gt; for node in $(srun uname -n | sort); do
</span><br>
<span class="quotelev1">&gt;         echo &quot;rank $rank=$node slots=1:*&quot;
</span><br>
<span class="quotelev1">&gt;         let rank+=1
</span><br>
<span class="quotelev1">&gt; done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It does seem to work in synthetic tests so I'm trying it now in my real
</span><br>
<span class="quotelev1">&gt; job. I had to hack a few run scripts so I'll probably spend the next hour
</span><br>
<span class="quotelev1">&gt; debugging something dumb I did.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I'm wondering about all this is: can this be done with --slot-list?
</span><br>
<span class="quotelev1">&gt; Or, perhaps, does --slot-list even work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried about 20 different variations of it, e.g., --slot-list 1:*,
</span><br>
<span class="quotelev1">&gt; --slot-list '1:*', --slot-list 1:0,1,2,3,4,5,6,7, --slot-list
</span><br>
<span class="quotelev1">&gt; 1:8,9,10,11,12,13,14,15, --slot-list 8-15, &amp;c., and every time I seem to
</span><br>
<span class="quotelev1">&gt; trigger an error via help-rmaps_rank_file.txt. I tried to read
</span><br>
<span class="quotelev1">&gt; through opal_hwloc_base_slot_list_parse in the source, but my C isn't great
</span><br>
<span class="quotelev1">&gt; (see my gmail address name) so that didn't help. Might not even be the
</span><br>
<span class="quotelev1">&gt; right function, but I was just acking the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 21, 2015 at 10:51 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try adding &#226;&#128;&#148;cpu-set a,b,c,&#226;&#128;&#166;  where the a,b,c&#226;&#128;&#166; are the core id&#226;&#128;&#153;s of your
</span><br>
<span class="quotelev2">&gt;&gt; second socket. I&#226;&#128;&#153;m working on a cleaner option as this has come up before.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 21, 2015, at 5:29 AM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Open MPI Gurus,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm currently trying to do something with Open MPI 1.8.8 that I'm pretty
</span><br>
<span class="quotelev2">&gt;&gt; sure is possible, but I'm just not smart enough to figure out. Namely, I'm
</span><br>
<span class="quotelev2">&gt;&gt; seeing some odd GPU timings and I think it's because I was dumb and assumed
</span><br>
<span class="quotelev2">&gt;&gt; the GPU was on the PCI bus next to Socket #0 as some older GPU nodes I ran
</span><br>
<span class="quotelev2">&gt;&gt; on were like that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But, a trip through lspci and lstopo has shown me that the GPU is
</span><br>
<span class="quotelev2">&gt;&gt; actually on Socket #1. These are dual socket Sandy Bridge nodes and I'd
</span><br>
<span class="quotelev2">&gt;&gt; like to do some tests where I run a 8 processes per node and those
</span><br>
<span class="quotelev2">&gt;&gt; processes all land on Socket #1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, what I'm trying to figure out is how to have Open MPI bind processes
</span><br>
<span class="quotelev2">&gt;&gt; like that. My first thought as always is to run a helloworld job with
</span><br>
<span class="quotelev2">&gt;&gt; -report-bindings on. I can manage to do this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (1061) $ mpirun -np 8 -report-bindings -map-by core ./helloWorld.exe
</span><br>
<span class="quotelev2">&gt;&gt; [borg01z205:16306] MCW rank 4 bound to socket 0[core 4[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [././././B/././.][./././././././.]
</span><br>
<span class="quotelev2">&gt;&gt; [borg01z205:16306] MCW rank 5 bound to socket 0[core 5[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [./././././B/./.][./././././././.]
</span><br>
<span class="quotelev2">&gt;&gt; [borg01z205:16306] MCW rank 6 bound to socket 0[core 6[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [././././././B/.][./././././././.]
</span><br>
<span class="quotelev2">&gt;&gt; [borg01z205:16306] MCW rank 7 bound to socket 0[core 7[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [./././././././B][./././././././.]
</span><br>
<span class="quotelev2">&gt;&gt; [borg01z205:16306] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [B/././././././.][./././././././.]
</span><br>
<span class="quotelev2">&gt;&gt; [borg01z205:16306] MCW rank 1 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [./B/./././././.][./././././././.]
</span><br>
<span class="quotelev2">&gt;&gt; [borg01z205:16306] MCW rank 2 bound to socket 0[core 2[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [././B/././././.][./././././././.]
</span><br>
<span class="quotelev2">&gt;&gt; [borg01z205:16306] MCW rank 3 bound to socket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [./././B/./././.][./././././././.]
</span><br>
<span class="quotelev2">&gt;&gt; Process    7 of    8 is on borg01z205
</span><br>
<span class="quotelev2">&gt;&gt; Process    5 of    8 is on borg01z205
</span><br>
<span class="quotelev2">&gt;&gt; Process    2 of    8 is on borg01z205
</span><br>
<span class="quotelev2">&gt;&gt; Process    3 of    8 is on borg01z205
</span><br>
<span class="quotelev2">&gt;&gt; Process    4 of    8 is on borg01z205
</span><br>
<span class="quotelev2">&gt;&gt; Process    6 of    8 is on borg01z205
</span><br>
<span class="quotelev2">&gt;&gt; Process    0 of    8 is on borg01z205
</span><br>
<span class="quotelev2">&gt;&gt; Process    1 of    8 is on borg01z205
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Great...but wrong socket! Is there a way to tell it to use Socket 1
</span><br>
<span class="quotelev2">&gt;&gt; instead?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note I'll be running under SLURM, so I will only have 8 processes per
</span><br>
<span class="quotelev2">&gt;&gt; node, so it shouldn't need to use Socket 0.
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Matt Thompson
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Man Among Men
</span><br>
<span class="quotelev2">&gt;&gt; Fulcrum of History
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/12/28190.php">http://www.open-mpi.org/community/lists/users/2015/12/28190.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/12/28195.php">http://www.open-mpi.org/community/lists/users/2015/12/28195.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/12/28196.php">http://www.open-mpi.org/community/lists/users/2015/12/28196.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
Cell 812-391-4914
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28197/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28198.php">Thomas Jahns: "Re: [OMPI users] openmpi-1.10.2rc1: wrong ELF class on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28196.php">Matt Thompson: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
<li><strong>In reply to:</strong> <a href="28196.php">Matt Thompson: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
<!-- nextthread="start" -->
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
