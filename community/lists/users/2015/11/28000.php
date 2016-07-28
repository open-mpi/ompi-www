<?
$subject_val = "Re: [OMPI users] How to send and receive an array correctly with java open-mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 08:43:18 2015" -->
<!-- isoreceived="20151105134318" -->
<!-- sent="Thu, 5 Nov 2015 13:43:13 +0000" -->
<!-- isosent="20151105134313" -->
<!-- name="Ibrahim Ikhlawi" -->
<!-- email="ibrahim_22s_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to send and receive an array correctly with java open-mpi" -->
<!-- id="DUB125-W2543FAFFD52600D94E5CBE97290_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="563A9D27.7050600_at_rist.or.jp" -->
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
<strong>From:</strong> Ibrahim Ikhlawi (<em>ibrahim_22s_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-05 08:43:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28001.php">Gilles Gouaillardet: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<li><strong>Previous message:</strong> <a href="27999.php">Gilles Gouaillardet: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>In reply to:</strong> <a href="27993.php">Gilles Gouaillardet: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28001.php">Gilles Gouaillardet: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<li><strong>Reply:</strong> <a href="28001.php">Gilles Gouaillardet: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the answer.
<br>
Isn't that the same thing by the 2-dim arrays?
<br>
I mean m1.length*m1.length, for example:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_WORLD.send(m1,   m1.length*m1.length   , MPI.INT, 1, tag);
<br>
But I get this exception: ArrayIndexOutOfBoundsException.
<br>
What should I write to avoid this exception?
<br>
<p>Best regards 
<br>
<p>Ibrahim
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/27993.php">http://www.open-mpi.org/community/lists/users/2015/11/27993.php</a> 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28000/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28001.php">Gilles Gouaillardet: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<li><strong>Previous message:</strong> <a href="27999.php">Gilles Gouaillardet: "Re: [OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>In reply to:</strong> <a href="27993.php">Gilles Gouaillardet: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28001.php">Gilles Gouaillardet: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
<li><strong>Reply:</strong> <a href="28001.php">Gilles Gouaillardet: "Re: [OMPI users] How to send and receive an array correctly with java open-mpi"</a>
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
