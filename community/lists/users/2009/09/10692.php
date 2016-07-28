<?
$subject_val = "Re: [OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 18 18:02:19 2009" -->
<!-- isoreceived="20090918220219" -->
<!-- sent="Fri, 18 Sep 2009 16:02:08 -0600" -->
<!-- isosent="20090918220208" -->
<!-- name="Joshua Bernstein" -->
<!-- email="jbernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X" -->
<!-- id="1974D44A-8B68-4AFB-B240-98EE1A281485_at_penguincomputing.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="53006.198.133.185.25.1253310964.squirrel_at_mercury.nsi.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X<br>
<strong>From:</strong> Joshua Bernstein (<em>jbernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-18 18:02:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10693.php">Pallab Datta: "Re: [OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X"</a>
<li><strong>Previous message:</strong> <a href="10691.php">Pallab Datta: "[OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X"</a>
<li><strong>In reply to:</strong> <a href="10691.php">Pallab Datta: "[OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10693.php">Pallab Datta: "Re: [OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X"</a>
<li><strong>Reply:</strong> <a href="10693.php">Pallab Datta: "Re: [OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X"</a>
<li><strong>Reply:</strong> <a href="10694.php">Pallab Datta: "Re: [OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Pallab,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Is there a chance its something simple like having the Mac's  
<br>
Fireware turned on? On my 10.4 system this is in System Preference- 
<br>
<span class="quotelev1"> &gt;Sharing, and then the Firewall tab.
</span><br>
<p>-Joshua Bernstein
<br>
Senior Software Engineer
<br>
Penguin Computing
<br>
<p>On Sep 18, 2009, at 3:56 PM, Pallab Datta wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running open-mpi between a Mac OSX (v.10.5) and Ubuntu Server  
</span><br>
<span class="quotelev1">&gt; V.9.04
</span><br>
<span class="quotelev1">&gt; (Linux Box).  I have configured OMPI V.1.3.3 on both of them with
</span><br>
<span class="quotelev1">&gt; --enable-heterogeneous --disable-shared --enable-static options.  
</span><br>
<span class="quotelev1">&gt; The Linux
</span><br>
<span class="quotelev1">&gt; box is connected via a wireless USB Adapter to the same sub-network in
</span><br>
<span class="quotelev1">&gt; which the Macinstosh is sitting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I tried to run mpirun with the following options between the  
</span><br>
<span class="quotelev1">&gt; Linux
</span><br>
<span class="quotelev1">&gt; box with the wireless card with another linux machine on the network
</span><br>
<span class="quotelev1">&gt; everything works fine.
</span><br>
<span class="quotelev1">&gt; I ran :
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/mpirun --mca OMPI_mca_mpi_preconnect_all 1 -np 2 -H
</span><br>
<span class="quotelev1">&gt; localhost,10.11.14.205 ./app
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I tried to run mpirun with the -hetero option from the  
</span><br>
<span class="quotelev1">&gt; Macintosh it
</span><br>
<span class="quotelev1">&gt; invokes the processes on both ends and then hangs at the MPI_Send
</span><br>
<span class="quotelev1">&gt; MPI_Receive functions.
</span><br>
<span class="quotelev1">&gt; I ran:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/mpirun  --mca btl_base_verbose 30 --mca
</span><br>
<span class="quotelev1">&gt; OMPI_mca_mpi_preconnect_all 1 -np 2 -hetero -H localhost,10.11.14.205
</span><br>
<span class="quotelev1">&gt; ./app
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and it hangs. I saw that the linux box is trying to connect() the Mac
</span><br>
<span class="quotelev1">&gt; using port 4/260. So I purposely forced mpi to look for higher  
</span><br>
<span class="quotelev1">&gt; numbered
</span><br>
<span class="quotelev1">&gt; ports..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran :
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/mpirun --mca btl_tcp_port_min_v4 36900 -mca
</span><br>
<span class="quotelev1">&gt; btl_tcp_port_range_v4 32 --mca btl_base_verbose 30 --mca
</span><br>
<span class="quotelev1">&gt; OMPI_mca_mpi_preconnect_all 1 -np 2 -hetero -H localhost,10.11.14.205
</span><br>
<span class="quotelev1">&gt; ./app
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and it still hangs giving the following message:
</span><br>
<span class="quotelev1">&gt; btl: tcp: attempting to connect() to address 10.11.14.203 on port 9360
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 10.11.14.203 == localhost.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anybody explain what I am missing and how I can make the  
</span><br>
<span class="quotelev1">&gt; macintosh and
</span><br>
<span class="quotelev1">&gt; Linux boxes talk to each other over wireless..
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; pallab
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10693.php">Pallab Datta: "Re: [OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X"</a>
<li><strong>Previous message:</strong> <a href="10691.php">Pallab Datta: "[OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X"</a>
<li><strong>In reply to:</strong> <a href="10691.php">Pallab Datta: "[OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10693.php">Pallab Datta: "Re: [OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X"</a>
<li><strong>Reply:</strong> <a href="10693.php">Pallab Datta: "Re: [OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X"</a>
<li><strong>Reply:</strong> <a href="10694.php">Pallab Datta: "Re: [OMPI users] Question on open-mpi not working over wireless between Ubuntu and Mac OS-X"</a>
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
