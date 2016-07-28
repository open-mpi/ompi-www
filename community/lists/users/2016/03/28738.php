<?
$subject_val = "Re: [OMPI users] locked memory and queue pairs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 12:22:07 2016" -->
<!-- isoreceived="20160317162207" -->
<!-- sent="Thu, 17 Mar 2016 16:15:38 +0000" -->
<!-- isosent="20160317161538" -->
<!-- name="Cabral, Matias A" -->
<!-- email="matias.a.cabral_at_[hidden]" -->
<!-- subject="Re: [OMPI users] locked memory and queue pairs" -->
<!-- id="39196F20B4590A4A8337B6A6F7F0FD8D853E3D90_at_FMSMSX102.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CABOsP2NTF1jk3V7BatSwEZT4_hx6ehBTdTeN8PS7Sbqk6cNQFg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] locked memory and queue pairs<br>
<strong>From:</strong> Cabral, Matias A (<em>matias.a.cabral_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 12:15:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28739.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Previous message:</strong> <a href="28737.php">Nathan Hjelm: "Re: [OMPI users] How to link the statically compiled OpenMPI library ?"</a>
<li><strong>In reply to:</strong> <a href="28726.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28739.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Reply:</strong> <a href="28739.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Reply:</strong> <a href="28743.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was looking for lines like&quot; [nodexyz:17085] selected cm best priority 40&quot; and  &quot; [nodexyz:17099] select: component psm selected&quot;
<br>
<p>_MAC
<br>
<p><p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Di Domenico
<br>
Sent: Thursday, March 17, 2016 5:52 AM
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] locked memory and queue pairs
<br>
<p>On Wed, Mar 16, 2016 at 4:49 PM, Cabral, Matias A &lt;matias.a.cabral_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I didn't go into the code to see who is actually calling this error message, but I suspect this may be a generic error for &quot;out of memory&quot; kind of thing and not specific to the que pair. To confirm please add  -mca pml_base_verbose 100 and add  -mca mtl_base_verbose 100  to see what is being selected.
</span><br>
<p>this didn't spit out anything overly useful, just lots of lines
<br>
<p>[node001:00909] mca: base: components_register: registering pml components [node001:00909] mca: base: components_register: found loaded component v [node001:00909] mca: base: components_register: component v register function successful [node001:00909] mca: base: components_register: found loaded component bfo [node001:00909] mca: base: components_register: component bfo register function successful [node001:00909] mca: base: components_register: found loaded component cm [node001:00909] mca: base: components_register: component cm register function successful [node001:00909] mca: base: components_register: found loaded component ob1 [node001:00909] mca: base: components_register: component ob1 register function successful
<br>
<p><span class="quotelev1">&gt; I'm trying to remember some details of IMB  and alltoallv to see if it is indeed requiring more resources that the other micro benchmarks.
</span><br>
<p>i'm using IMB for my tests, but this issue came up because a researcher isn't able to run large alltoall codes, so i don't believe it's specific to IMB
<br>
<p><span class="quotelev1">&gt; BTW, did you confirm the limits setup? Also do the nodes have all the same amount of mem?
</span><br>
<p>yes, all nodes have the limits set to unlimited and each node has 256GB of memory _______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28726.php">http://www.open-mpi.org/community/lists/users/2016/03/28726.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28739.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Previous message:</strong> <a href="28737.php">Nathan Hjelm: "Re: [OMPI users] How to link the statically compiled OpenMPI library ?"</a>
<li><strong>In reply to:</strong> <a href="28726.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28739.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Reply:</strong> <a href="28739.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Reply:</strong> <a href="28743.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
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
