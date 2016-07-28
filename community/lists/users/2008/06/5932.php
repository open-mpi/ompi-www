<?
$subject_val = "Re: [OMPI users] Error in mx_init message";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 18 12:31:15 2008" -->
<!-- isoreceived="20080618163115" -->
<!-- sent="Wed, 18 Jun 2008 18:30:55 +0200" -->
<!-- isosent="20080618163055" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error in mx_init message" -->
<!-- id="200806181830.56910.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BDDB7C5009659447B2F1747B53854FE801BDF612_at_EXDUR1.mds.ad.dur.ac.uk" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-18 12:30:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5933.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>Previous message:</strong> <a href="5931.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>In reply to:</strong> <a href="5931.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5933.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Henk,
<br>
could You please try the reverse and specifically select the pml, that would 
<br>
adress the openib BTLs, by using:
<br>
<p>mpirun -np $NSLOTS --mca pml ob1  $exe
<br>
<p>Hope, this helps.
<br>
<p>CU,
<br>
Rainer
<br>
<p>On Mittwoch, 18. Juni 2008, SLIM H.A. wrote:
<br>
<span class="quotelev1">&gt; Hi George
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just tried that and got a different error message:
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
<span class="quotelev1">&gt; value of the &quot;component_path&quot; MCA parameter and ensure that it has at
</span><br>
<span class="quotelev1">&gt; least one directory that contains valid MCA components.
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
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; [mailto:users-bounces_at_[hidden]] On Behalf Of George Bosilca
</span><br>
<span class="quotelev2">&gt; &gt; Sent: 18 June 2008 15:27
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Error in mx_init message
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is a different issue. On top of Myrinet, Open MPI support two
</span><br>
<span class="quotelev2">&gt; &gt; nodes: cm and the others. Basically, the difference is how
</span><br>
<span class="quotelev2">&gt; &gt; the card will be used. If you only specify the btls then Open
</span><br>
<span class="quotelev2">&gt; &gt; MPI will try to initialize the CM PML and that's how this
</span><br>
<span class="quotelev2">&gt; &gt; error message appears. If you add OMPI_MCA_pml=^cm to your
</span><br>
<span class="quotelev2">&gt; &gt; environment, then this warning will go away.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 18, 2008, at 4:22 PM, SLIM H.A. wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have OpenMPI-1.2.5 configured with myrinet and infiniband:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OMPI_MCA_btl=openib,self,sm
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The job runs with the &quot;error&quot; message
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;Error in mx_init (error MX driver not loaded.)&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; which makes sense in itself as there is no myrinet card on the node.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is it correct to assume that the ib interconnect will be
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; used anyway?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I saw an old email with a similar query and a comment that this
</span><br>
<span class="quotelev3">&gt; &gt; &gt; message would be removed in a future release, has that happened yet?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Henk
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><p><pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                          Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5933.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>Previous message:</strong> <a href="5931.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
<li><strong>In reply to:</strong> <a href="5931.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5933.php">SLIM H.A.: "Re: [OMPI users] Error in mx_init message"</a>
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
