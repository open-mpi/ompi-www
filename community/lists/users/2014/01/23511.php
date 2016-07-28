<?
$subject_val = "[OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 30 18:02:16 2014" -->
<!-- isoreceived="20140130230216" -->
<!-- sent="Thu, 30 Jan 2014 18:02:13 -0500" -->
<!-- isosent="20140130230213" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release." -->
<!-- id="7F4B6BD1-FEA8-4089-A5FC-D6050DE23E44_at_umich.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release.<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-30 18:02:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23512.php">Siddhartha Jana: "[OMPI users] Implementation of TCP v/s OpenIB (Eager and Rendezvous) protocols"</a>
<li><strong>Previous message:</strong> <a href="23510.php">Tim Prince: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23514.php">Mike Dubman: "Re: [OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release."</a>
<li><strong>Reply:</strong> <a href="23514.php">Mike Dubman: "Re: [OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I grabbed the latest FCA release from Mellnox's website.  We have been building against FCA 2.5 for a while, but it never worked right.  Today I tried to build against the latest (version number was still 2.5, but I think we have updated our OFED sense the last install).  We are running MOFED 1.5.3-4.0.42
<br>
<p>1.6.5 configures fine against the old 2.5 fca library I have around (don't recall what OFED it expected)  but the new one, which claims is for RHEL6.4 OFED 1.5.3-4.0.42,  fails in configure with:
<br>
<p>/home/software/rhel6/fca/2.5-v2/lib/libfca.so: undefined reference to `smp_mkey_set_at_IBMAD_1.3'
<br>
<p>libibmad is installed, but the symbol smp_mkey_set  is not defined in it. IBMAD_1.3  is though.
<br>
<p>Any thought what may cause this?  As far as I know our MOFED is from Mellnox and should match up fine to their release of FCA. So this has me scratching my head.
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
<p><p><p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23511/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23512.php">Siddhartha Jana: "[OMPI users] Implementation of TCP v/s OpenIB (Eager and Rendezvous) protocols"</a>
<li><strong>Previous message:</strong> <a href="23510.php">Tim Prince: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23514.php">Mike Dubman: "Re: [OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release."</a>
<li><strong>Reply:</strong> <a href="23514.php">Mike Dubman: "Re: [OMPI users] Can't build openmpi-1.6.5 with latest FCA 2.5 release."</a>
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
