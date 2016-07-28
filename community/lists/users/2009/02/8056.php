<?
$subject_val = "Re: [OMPI users] running as rank 0 of 1 for 2 processor";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 04:09:48 2009" -->
<!-- isoreceived="20090213090948" -->
<!-- sent="Fri, 13 Feb 2009 14:39:42 +0530" -->
<!-- isosent="20090213090942" -->
<!-- name="Ramya Narasimhan" -->
<!-- email="varsharamya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running as rank 0 of 1 for 2 processor" -->
<!-- id="a0e0cf520902130109k3d153581l886d73b221372429_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49952C88.6010004_at_kuicr.kyoto-u.ac.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] running as rank 0 of 1 for 2 processor<br>
<strong>From:</strong> Ramya Narasimhan (<em>varsharamya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-13 04:09:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8057.php">Nicolas Moulin: "Re: [OMPI users] openmpi-mca-params.conf"</a>
<li><strong>Previous message:</strong> <a href="8055.php">Raymond Wan: "Re: [OMPI users] running as rank 0 of 1 for 2 processor"</a>
<li><strong>In reply to:</strong> <a href="8055.php">Raymond Wan: "Re: [OMPI users] running as rank 0 of 1 for 2 processor"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Raymond,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks for your reply. Actually I have installed lam
<br>
previously. When I completely removed the mpirun from the /usr/bin and set
<br>
mpirun to this openmpi path its working correctly.
<br>
Ramya
<br>
<p>On Fri, Feb 13, 2009 at 1:47 PM, Raymond Wan &lt;rwan_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ramya,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ramya Narasimhan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;     I have installed openmpi-1.3. When I checked for the example programs,
</span><br>
<span class="quotelev2">&gt;&gt; the output shows only rank 0 of size 1 for 2 processors. When I gave the
</span><br>
<span class="quotelev2">&gt;&gt; command: *mpirun -hostfile node -np 2 hello_c*
</span><br>
<span class="quotelev2">&gt;&gt; the output is
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev2">&gt;&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my node file, I have
</span><br>
<span class="quotelev2">&gt;&gt; *IP address* slots=2 max_slots=2
</span><br>
<span class="quotelev2">&gt;&gt; I don't know why it is not giving as 0 of 2 and 1 of 2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other than the text output, can you confirm that this is happening?  I'm no
</span><br>
<span class="quotelev1">&gt; expert, but as a sanity check, I would put an infinite loop after printing
</span><br>
<span class="quotelev1">&gt; &quot;hello, world&quot;.  Then opening another terminal and run &quot;top&quot;.  I'm not sure
</span><br>
<span class="quotelev1">&gt; if all top's are the same, but I would hit &quot;f&quot; to include more fields and
</span><br>
<span class="quotelev1">&gt; then &quot;J&quot; to include the &quot;Last used cpu&quot;.  Check the help manual for your top
</span><br>
<span class="quotelev1">&gt; if its different for you.  On my top, this information is not included by
</span><br>
<span class="quotelev1">&gt; default.  Then return to the previous screen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ideally, you should see two processes running on your computer.  One on
</span><br>
<span class="quotelev1">&gt; processor &quot;0&quot; and the other on &quot;1&quot;.  Can you confirm this is not the case
</span><br>
<span class="quotelev1">&gt; and both are set to &quot;0&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ray
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8056/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8057.php">Nicolas Moulin: "Re: [OMPI users] openmpi-mca-params.conf"</a>
<li><strong>Previous message:</strong> <a href="8055.php">Raymond Wan: "Re: [OMPI users] running as rank 0 of 1 for 2 processor"</a>
<li><strong>In reply to:</strong> <a href="8055.php">Raymond Wan: "Re: [OMPI users] running as rank 0 of 1 for 2 processor"</a>
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
