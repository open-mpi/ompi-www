<?
$subject_val = "Re: [OMPI users] running as rank 0 of 1 for 2 processor";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 03:17:19 2009" -->
<!-- isoreceived="20090213081719" -->
<!-- sent="Fri, 13 Feb 2009 17:17:12 +0900" -->
<!-- isosent="20090213081712" -->
<!-- name="Raymond Wan" -->
<!-- email="rwan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running as rank 0 of 1 for 2 processor" -->
<!-- id="49952C88.6010004_at_kuicr.kyoto-u.ac.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="a0e0cf520902122232y763319c5h776a941e04a9def9_at_mail.gmail.com" -->
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
<strong>From:</strong> Raymond Wan (<em>rwan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-13 03:17:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8056.php">Ramya Narasimhan: "Re: [OMPI users] running as rank 0 of 1 for 2 processor"</a>
<li><strong>Previous message:</strong> <a href="8054.php">Ramya Narasimhan: "[OMPI users] running as rank 0 of 1 for 2 processor"</a>
<li><strong>In reply to:</strong> <a href="8054.php">Ramya Narasimhan: "[OMPI users] running as rank 0 of 1 for 2 processor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8056.php">Ramya Narasimhan: "Re: [OMPI users] running as rank 0 of 1 for 2 processor"</a>
<li><strong>Reply:</strong> <a href="8056.php">Ramya Narasimhan: "Re: [OMPI users] running as rank 0 of 1 for 2 processor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ramya,
<br>
<p><p>Ramya Narasimhan wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;      I have installed openmpi-1.3. When I checked for the example programs,
</span><br>
<span class="quotelev1">&gt; the output shows only rank 0 of size 1 for 2 processors. When I gave the
</span><br>
<span class="quotelev1">&gt; command: *mpirun -hostfile node -np 2 hello_c*
</span><br>
<span class="quotelev1">&gt; the output is
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my node file, I have
</span><br>
<span class="quotelev1">&gt; *IP address* slots=2 max_slots=2
</span><br>
<span class="quotelev1">&gt; I don't know why it is not giving as 0 of 2 and 1 of 2.
</span><br>
<p><p>Other than the text output, can you confirm that this is happening?  I'm no expert, but as a sanity check, I would put an infinite loop after printing &quot;hello, world&quot;.  Then opening another terminal and run &quot;top&quot;.  I'm not sure if all top's are the same, but I would hit &quot;f&quot; to include more fields and then &quot;J&quot; to include the &quot;Last used cpu&quot;.  Check the help manual for your top if its different for you.  On my top, this information is not included by default.  Then return to the previous screen.
<br>
<p>Ideally, you should see two processes running on your computer.  One on processor &quot;0&quot; and the other on &quot;1&quot;.  Can you confirm this is not the case and both are set to &quot;0&quot;?
<br>
<p>Ray
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8056.php">Ramya Narasimhan: "Re: [OMPI users] running as rank 0 of 1 for 2 processor"</a>
<li><strong>Previous message:</strong> <a href="8054.php">Ramya Narasimhan: "[OMPI users] running as rank 0 of 1 for 2 processor"</a>
<li><strong>In reply to:</strong> <a href="8054.php">Ramya Narasimhan: "[OMPI users] running as rank 0 of 1 for 2 processor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8056.php">Ramya Narasimhan: "Re: [OMPI users] running as rank 0 of 1 for 2 processor"</a>
<li><strong>Reply:</strong> <a href="8056.php">Ramya Narasimhan: "Re: [OMPI users] running as rank 0 of 1 for 2 processor"</a>
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
