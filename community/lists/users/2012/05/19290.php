<?
$subject_val = "Re: [OMPI users] MPI-IO puzzlement";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 16 06:10:19 2012" -->
<!-- isoreceived="20120516101019" -->
<!-- sent="Wed, 16 May 2012 11:10:13 +0100 (WEST)" -->
<!-- isosent="20120516101013" -->
<!-- name="Ricardo Reis" -->
<!-- email="rreis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-IO puzzlement" -->
<!-- id="alpine.DEB.2.00.1205161105470.14706_at_serodio" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="5AA1B52D-7E5B-4F56-949F-0A879FC0344A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI-IO puzzlement<br>
<strong>From:</strong> Ricardo Reis (<em>rreis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-16 06:10:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19291.php">devendra rai: "[OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Previous message:</strong> <a href="19289.php">Rohan Deshpande: "[OMPI users] MPI_SCAN"</a>
<li><strong>In reply to:</strong> <a href="19287.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19296.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Reply:</strong> <a href="19296.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Dear all
<br>
<p>&nbsp;&nbsp;I think I find the culprit.
<br>
<p>&nbsp;&nbsp;I was calculating my offset using
<br>
<p>&nbsp;&nbsp;offset = my_rank*dim
<br>
<p>&nbsp;&nbsp;where dim is the array size. Both my_rank and dim are normal integers and 
<br>
here lies the rub.
<br>
<p>&nbsp;&nbsp;Fortran (or should I say gfortran?) multiplies my_rank*dim in integer*4 
<br>
and then converts to integer*8 (the offset type). Basically everything is 
<br>
lost then because the value converted is already out of range. I've done a 
<br>
small programme to test this and doing
<br>
<p>&nbsp;&nbsp;offset = INT(my_rank,8)*INT(dim,8)
<br>
<p>&nbsp;&nbsp;works fine (in the test programme, I'm still checking if there is another 
<br>
problem on the other one)
<br>
<p>&nbsp;&nbsp;Anyway, although is becomes obvious after tracking it I think it can be a 
<br>
normal pitfall for the unaware...
<br>
<p>&nbsp;&nbsp;best,
<br>
<p>&nbsp;&nbsp;Ricardo Reis
<br>
<p>&nbsp;&nbsp;'Non Serviam'
<br>
<p>&nbsp;&nbsp;PhD/MSc Mechanical Engineering | Lic. Aerospace Engineering
<br>
<p>&nbsp;&nbsp;Computational Fluid Dynamics, High Performance Computing, Turbulence
<br>
&nbsp;&nbsp;<a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>
<br>
<p>&nbsp;&nbsp;Cultural Instigator @ R&#225;dio Zero
<br>
&nbsp;&nbsp;<a href="http://www.radiozero.pt">http://www.radiozero.pt</a>
<br>
<p>&nbsp;&nbsp;<a href="http://www.flickr.com/photos/rreis/">http://www.flickr.com/photos/rreis/</a>
<br>
<p>&nbsp;&nbsp;contacts:  gtalk: kyriusan_at_[hidden]  skype: kyriusan
<br>
<p>&nbsp;&nbsp;Institutional Address:
<br>
<p>&nbsp;&nbsp;Ricardo J.N. dos Reis
<br>
&nbsp;&nbsp;IDMEC, Instituto Superior T&#233;cnico, Technical University of Lisbon
<br>
&nbsp;&nbsp;Av. Rovisco Pais
<br>
&nbsp;&nbsp;1049-001 Lisboa
<br>
&nbsp;&nbsp;Portugal
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- email sent with alpine 2.00 -
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19291.php">devendra rai: "[OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Previous message:</strong> <a href="19289.php">Rohan Deshpande: "[OMPI users] MPI_SCAN"</a>
<li><strong>In reply to:</strong> <a href="19287.php">Jeff Squyres: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19296.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Reply:</strong> <a href="19296.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
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
