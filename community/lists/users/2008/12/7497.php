<?
$subject_val = "Re: [OMPI users] using of MPI_Publish_name with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 10:45:02 2008" -->
<!-- isoreceived="20081210154502" -->
<!-- sent="Wed, 10 Dec 2008 10:44:56 -0500" -->
<!-- isosent="20081210154456" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using of MPI_Publish_name with openmpi" -->
<!-- id="7F26319A-BBC4-45A0-8320-5F1801043057_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="493FE00B.2080003_at_cea.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] using of MPI_Publish_name with openmpi<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-10 10:44:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7498.php">Brock Palen: "Re: [OMPI users] Multicast?"</a>
<li><strong>Previous message:</strong> <a href="7496.php">George Bosilca: "Re: [OMPI users] Multicast?"</a>
<li><strong>In reply to:</strong> <a href="7495.php">Bernard Secher - SFME/LGLS: "[OMPI users] using of MPI_Publish_name with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7504.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] using of MPI_Publish_name with openmpi"</a>
<li><strong>Reply:</strong> <a href="7504.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] using of MPI_Publish_name with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bernard,
<br>
<p>Could you give us more details on the version of Open MPI you are  
<br>
using ? I suppose from your message this is one of the 1.2 series, but  
<br>
mode details would be greatly helpful.
<br>
<p>An utility called orte-clean can be used to try to remove all the  
<br>
garbage left, should something go wrong.
<br>
<p>We have fixed a number of bugs in the MPI-2 dynamics recently. The  
<br>
forthcoming 1.3 should be more robust to that aspect. You can have a  
<br>
preview of it by using the svn version of Open MPI. The concepts have  
<br>
changed a little since then as --persistent --seed have been replaced  
<br>
by an external name server called ompi-server. I can give you more  
<br>
details if you want to try the svn version.
<br>
<p>Regards,
<br>
Aurelien
<br>
<p><pre>
--
* Dr. Aur&#233;lien Bouteiller
* Sr. Research Associate at Innovative Computing Laboratory
* University of Tennessee
* 1122 Volunteer Boulevard, suite 350
* Knoxville, TN 37996
* 865 974 6321
Le 10 d&#233;c. 08 &#224; 10:28, Bernard Secher - SFME/LGLS a &#233;crit :
&gt; Hi everybody
&gt;
&gt; I want to use MPI_publish_name function to do communicaztion between  
&gt; two independant code.
&gt;
&gt; I saw on the web i must use the orted daemon with the following  
&gt; command:
&gt;
&gt;
&gt; orted --persistent --seed --scope public --universe foo
&gt;
&gt; The communication success, but when i close the communication  I  
&gt; have a dead-lock at the following function: MPI_Comm_disconnect();
&gt;
&gt;
&gt; I have a second question:
&gt; How can i stop the orted daemon?
&gt;
&gt; Bernard
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7498.php">Brock Palen: "Re: [OMPI users] Multicast?"</a>
<li><strong>Previous message:</strong> <a href="7496.php">George Bosilca: "Re: [OMPI users] Multicast?"</a>
<li><strong>In reply to:</strong> <a href="7495.php">Bernard Secher - SFME/LGLS: "[OMPI users] using of MPI_Publish_name with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7504.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] using of MPI_Publish_name with openmpi"</a>
<li><strong>Reply:</strong> <a href="7504.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] using of MPI_Publish_name with openmpi"</a>
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
