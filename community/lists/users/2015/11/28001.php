<?
$subject_val = "Re: [OMPI users] How to send and receive an array correctly with java open-mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 08:59:11 2015" -->
<!-- isoreceived="20151105135911" -->
<!-- sent="Thu, 5 Nov 2015 22:59:07 +0900" -->
<!-- isosent="20151105135907" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to send and receive an array correctly with java open-mpi" -->
<!-- id="CAAkFZ5vMCT9BAck2KC5hJOQw=pT3dJFFaMRCQ96guC7AFQ=3rQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="DUB125-W2543FAFFD52600D94E5CBE97290_at_phx.gbl" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-05 08:59:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28002.php">Sasso, John (GE Power & Water, Non-GE): "[OMPI users] btl_openib_receive_queues &amp; mca-btl-openib-device-params.ini"</a>
<li><strong>Previous message:</strong> <a href="28000.php">Ibrahim Ikhlawi: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<li><strong>In reply to:</strong> <a href="28000.php">Ibrahim Ikhlawi: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe not...
<br>
I do not remember how Java treats 2dims array (e.g. matrix or array of
<br>
array)
<br>
at first, you can try
<br>
int[][]m = new int [2][3];
<br>
and print m.length
<br>
it could be 2, 3 or 6 ...
<br>
<p>bottom line, you might have to use one send per row, or use a datatype, or
<br>
pack and send
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, November 5, 2015, Ibrahim Ikhlawi &lt;ibrahim_22s_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the answer.
</span><br>
<span class="quotelev1">&gt; Isn't that the same thing by the 2-dim arrays?
</span><br>
<span class="quotelev1">&gt; I mean m1.length*m1.length, for example:
</span><br>
<span class="quotelev1">&gt;           MPI.COMM_WORLD.send(m1,   m1.length*m1.length   , MPI.INT, 1,
</span><br>
<span class="quotelev1">&gt; tag);
</span><br>
<span class="quotelev1">&gt; But I get this exception: ArrayIndexOutOfBoundsException.
</span><br>
<span class="quotelev1">&gt; What should I write to avoid this exception?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ibrahim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ibrahim,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if you want to send the full array, then please replace
</span><br>
<span class="quotelev1">&gt;         MPI.COMM_WORLD.send(m1, 1, MPI.INT, 1, tag);
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt;         MPI.COMM_WORLD.send(m1, m1.length, MPI.INT, 1, tag);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and do similar changes in recv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/5/2015 2:57 AM, Ibrahim Ikhlawi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to send an array from process to another one. I send the array but
</span><br>
<span class="quotelev1">&gt; I get only the first element of the array.
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
<span class="quotelev1">&gt; users mailing listusers_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/27991.php">http://www.open-mpi.org/community/lists/users/2015/11/27991.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> Link to
</span><br>
<span class="quotelev1">&gt; this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/27993.php">http://www.open-mpi.org/community/lists/users/2015/11/27993.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28001/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28002.php">Sasso, John (GE Power & Water, Non-GE): "[OMPI users] btl_openib_receive_queues &amp; mca-btl-openib-device-params.ini"</a>
<li><strong>Previous message:</strong> <a href="28000.php">Ibrahim Ikhlawi: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<li><strong>In reply to:</strong> <a href="28000.php">Ibrahim Ikhlawi: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
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
