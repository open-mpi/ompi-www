<?
$subject_val = "Re: [OMPI users] Error in mx_init message";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 12:54:01 2008" -->
<!-- isoreceived="20080619165401" -->
<!-- sent="Thu, 19 Jun 2008 18:53:51 +0200" -->
<!-- isosent="20080619165351" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error in mx_init message" -->
<!-- id="37C47A02-9962-4901-A251-E1F96FC58B49_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BDDB7C5009659447B2F1747B53854FE801BDF616_at_EXDUR1.mds.ad.dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error in mx_init message<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-19 12:53:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5942.php">Joshua Bernstein: "[OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5940.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>In reply to:</strong> <a href="5933.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Henk,
<br>
<p>It was supposed to work ... Apparently we had a bug on the PML  
<br>
selection when ^ was used. It is corrected now in the trunk. Until you  
<br>
upgrade to the latest version (&gt; 18683), you can specifically ask for  
<br>
the OB1 PML. Please add OMPI_MCA_PML = ob1 to your script.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 19, 2008, at 10:31 AM, SLIM H.A. wrote:
<br>
<p><span class="quotelev1">&gt; Hi George
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe this got lost in my previous reply. I followed your  
</span><br>
<span class="quotelev1">&gt; suggestion
</span><br>
<span class="quotelev1">&gt; and got a different error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; No available pml components were found!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This means that there are no components of this type installed on your
</span><br>
<span class="quotelev1">&gt; system or all the components reported that they could not be used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a fatal error; your MPI process is likely to abort.  Check the
</span><br>
<span class="quotelev1">&gt; output of the &quot;ompi_info&quot; command and ensure that components of this
</span><br>
<span class="quotelev1">&gt; type are available on your system.  You may also wish to check the  
</span><br>
<span class="quotelev1">&gt; value
</span><br>
<span class="quotelev1">&gt; of the &quot;component_path&quot; MCA parameter and ensure that it has at least
</span><br>
<span class="quotelev1">&gt; one directory that contains valid MCA components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [node258:13595] PML ^cm cannot be selected
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These are the lines in my GridEngine script:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setenv OMPI_MCA_btl &quot;openib,self,sm&quot;
</span><br>
<span class="quotelev1">&gt; setenv OMPI_MCA_pml &quot;^cm&quot;
</span><br>
<span class="quotelev1">&gt; mpirun -np $NSLOTS $exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The run appears to fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I doing something wrong here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Henk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of George Bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Sent: 18 June 2008 15:27
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Error in mx_init message
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a different issue. On top of Myrinet, Open MPI support two
</span><br>
<span class="quotelev2">&gt;&gt; nodes: cm and the others. Basically, the difference is how
</span><br>
<span class="quotelev2">&gt;&gt; the card will be used. If you only specify the btls then Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI will try to initialize the CM PML and that's how this
</span><br>
<span class="quotelev2">&gt;&gt; error message appears. If you add OMPI_MCA_pml=^cm to your
</span><br>
<span class="quotelev2">&gt;&gt; environment, then this warning will go away.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 18, 2008, at 4:22 PM, SLIM H.A. wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have OpenMPI-1.2.5 configured with myrinet and infiniband:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_btl=openib,self,sm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The job runs with the &quot;error&quot; message
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;Error in mx_init (error MX driver not loaded.)&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which makes sense in itself as there is no myrinet card on the node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it correct to assume that the ib interconnect will be
</span><br>
<span class="quotelev2">&gt;&gt; used anyway?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I saw an old email with a similar query and a comment that this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message would be removed in a future release, has that happened yet?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Henk
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="5942.php">Joshua Bernstein: "[OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5940.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI with bounds checking"</a>
<li><strong>In reply to:</strong> <a href="5933.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
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
