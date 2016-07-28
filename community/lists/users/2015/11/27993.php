<?
$subject_val = "Re: [OMPI users] How to send and receive an array correctly with java open-mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  4 19:05:03 2015" -->
<!-- isoreceived="20151105000503" -->
<!-- sent="Thu, 5 Nov 2015 09:04:55 +0900" -->
<!-- isosent="20151105000455" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to send and receive an array correctly with java open-mpi" -->
<!-- id="563A9D27.7050600_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="DUB125-W375C9011A8CAB18F5A5FC0972A0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to send and receive an array correctly with java open-mpi<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-04 19:04:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27994.php">Oliver: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Previous message:</strong> <a href="27992.php">Oliver: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>In reply to:</strong> <a href="27991.php">Ibrahim Ikhlawi: "[OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28000.php">Ibrahim Ikhlawi: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<li><strong>Reply:</strong> <a href="28000.php">Ibrahim Ikhlawi: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ibrahim,
<br>
<p>if you want to send the full array, then please replace
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_WORLD.send(m1, 1, MPI.INT, 1, tag);
<br>
with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_WORLD.send(m1, m1.length, MPI.INT, 1, tag);
<br>
<p>and do similar changes in recv
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 11/5/2015 2:57 AM, Ibrahim Ikhlawi wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to send an array from process to another one. I send the array 
</span><br>
<span class="quotelev1">&gt; but I get only the first element of the array.
</span><br>
<span class="quotelev1">&gt; This is a section from my code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int[] m1= new int[5];
</span><br>
<span class="quotelev1">&gt; if (0 == myrank) {
</span><br>
<span class="quotelev1">&gt;         for(int i= 0; i&lt;m1.length ; i++){
</span><br>
<span class="quotelev1">&gt;             m1[i] = 100;
</span><br>
<span class="quotelev1">&gt;         System.out.println(&quot;m1[&quot;+i+&quot;]&quot;+m1[i]);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         MPI.COMM_WORLD.send(m1, 1, MPI.INT, 1, tag);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     }else{
</span><br>
<span class="quotelev1">&gt;         MPI.COMM_WORLD.recv(m1 , 1 , MPI.INT , 0 ,tag);
</span><br>
<span class="quotelev1">&gt;         for(int i= 0; i&lt;m1.length ; i++){
</span><br>
<span class="quotelev1">&gt;             m2[i] = 3*m1[i];
</span><br>
<span class="quotelev1">&gt;         System.out.println(&quot;m1[&quot;+i+&quot;]&quot;+m1[i]+&quot; m2[&quot;+i+&quot;]&quot;+m2[i]);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         MPI.COMM_WORLD.send(m2, 1 , MPI.INT, 0, tag);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if(0 == myrank){
</span><br>
<span class="quotelev1">&gt;         MPI.COMM_WORLD.recv(m2, 1 , MPI.INT, 1 ,tag);
</span><br>
<span class="quotelev1">&gt;         System.out.println(Arrays.toString(m2));
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the result of this program is:
</span><br>
<span class="quotelev1">&gt; m1[0]100
</span><br>
<span class="quotelev1">&gt; m1[1]100
</span><br>
<span class="quotelev1">&gt; m1[2]100
</span><br>
<span class="quotelev1">&gt; m1[3]100
</span><br>
<span class="quotelev1">&gt; m1[4]100
</span><br>
<span class="quotelev1">&gt; [300, 0, 0, 0, 0]
</span><br>
<span class="quotelev1">&gt; m1[0]100  m2[0]300
</span><br>
<span class="quotelev1">&gt; m1[1]0  m2[1]0
</span><br>
<span class="quotelev1">&gt; m1[2]0  m2[2]0
</span><br>
<span class="quotelev1">&gt; m1[3]0  m2[3]0
</span><br>
<span class="quotelev1">&gt; m1[4]0  m2[4]0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/27991.php">http://www.open-mpi.org/community/lists/users/2015/11/27991.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27993/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27994.php">Oliver: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Previous message:</strong> <a href="27992.php">Oliver: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>In reply to:</strong> <a href="27991.php">Ibrahim Ikhlawi: "[OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28000.php">Ibrahim Ikhlawi: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<li><strong>Reply:</strong> <a href="28000.php">Ibrahim Ikhlawi: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
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
