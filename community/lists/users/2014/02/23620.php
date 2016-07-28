<?
$subject_val = "Re: [OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 14 17:09:42 2014" -->
<!-- isoreceived="20140214220942" -->
<!-- sent="Fri, 14 Feb 2014 17:09:40 -0500" -->
<!-- isosent="20140214220940" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release." -->
<!-- id="8769369F-FA45-4E35-9B11-DDBB46D43EFA_at_umich.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1KyaF1YMHeGfZ-ugW=41nRiXnrjYvV2D=Mnbzj0uchkLy4A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release.<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-14 17:09:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23621.php">tmishima_at_[hidden]: "[OMPI users] map-by node with openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23619.php">Saliya Ekanayake: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23514.php">Mike Dubman: "Re: [OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike,
<br>
<p>We checked it over, here is what the guy who knows OFED much better than I do sent me:
<br>
<p>We are running version 1.3.8.MLNX_20120424-0.1 of libibmad and version 1.3.7.MLNX_20130110_ff06102-0.1 of libibumad. The 1.5.3-4.0.42 release notes indicate that these are the latest versions of the packages: 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.mellanox.com/related-docs/prod_software/Mellanox_OFED_Linux_Release_Notes_1_5_3-4_0_42.txt">http://www.mellanox.com/related-docs/prod_software/Mellanox_OFED_Linux_Release_Notes_1_5_3-4_0_42.txt</a>
<br>
<p>Thanks
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
XSEDE Campus Champion
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Jan 31, 2014, at 9:06 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; Can it be that libibmad/libibumad installed on your system belongs to previous mofed installation?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; M.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 31, 2014 2:02 AM, &quot;Brock Palen&quot; &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I grabbed the latest FCA release from Mellnox's website.  We have been building against FCA 2.5 for a while, but it never worked right.  Today I tried to build against the latest (version number was still 2.5, but I think we have updated our OFED sense the last install).  We are running MOFED 1.5.3-4.0.42
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.6.5 configures fine against the old 2.5 fca library I have around (don't recall what OFED it expected)  but the new one, which claims is for RHEL6.4 OFED 1.5.3-4.0.42,  fails in configure with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/software/rhel6/fca/2.5-v2/lib/libfca.so: undefined reference to `smp_mkey_set_at_IBMAD_1.3'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libibmad is installed, but the symbol smp_mkey_set  is not defined in it. IBMAD_1.3  is though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any thought what may cause this?  As far as I know our MOFED is from Mellnox and should match up fine to their release of FCA. So this has me scratching my head.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23620/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23621.php">tmishima_at_[hidden]: "[OMPI users] map-by node with openmpi-1.7.5a1"</a>
<li><strong>Previous message:</strong> <a href="23619.php">Saliya Ekanayake: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23514.php">Mike Dubman: "Re: [OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release."</a>
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
