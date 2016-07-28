<?
$subject_val = "Re: [OMPI users] Accessing to the send buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  2 12:22:02 2010" -->
<!-- isoreceived="20100802162202" -->
<!-- sent="Mon, 2 Aug 2010 12:21:51 -0400" -->
<!-- isosent="20100802162151" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Accessing to the send buffer" -->
<!-- id="OF69AEC0AD.76300DAB-ON85257773.005903DE-85257773.0059E5AB_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4C56E82B.6030500_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Accessing to the send buffer<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-02 12:21:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13895.php">Allen Barnett: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>Previous message:</strong> <a href="13893.php">Terry Dontje: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>In reply to:</strong> <a href="13893.php">Terry Dontje: "Re: [OMPI users] Accessing to the send buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13897.php">Terry Frankcombe: "Re: [OMPI users] Accessing to the send buffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For reading the data from an isend buffer to cause problems, the 
<br>
underlying hardware would need to have very unusual characteristic that 
<br>
the MPI implementation is exploiting.  People have imagined hardware 
<br>
characteristics that could make reading an Isend buffer a problem but I 
<br>
have never heard of real hardware where it would be.  (Imagine hardware 
<br>
where posting an ISEND causes addressability of the underlying memory to 
<br>
be handed over to an adapter until the send is done. The processor loses 
<br>
addressability.  No such real hardware I ever heard of but if there were, 
<br>
the send buffer access rule would be relevant)
<br>
<p>The Forum has decided the send buffer rule is to restrictive.
<br>
<p><p><p>Dick Treumann  -  MPI Team 
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13894/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13895.php">Allen Barnett: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>Previous message:</strong> <a href="13893.php">Terry Dontje: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>In reply to:</strong> <a href="13893.php">Terry Dontje: "Re: [OMPI users] Accessing to the send buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13897.php">Terry Frankcombe: "Re: [OMPI users] Accessing to the send buffer"</a>
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
