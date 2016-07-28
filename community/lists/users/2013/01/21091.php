<?
$subject_val = "Re: [OMPI users] problem with MPI datatypes not defined as constants in	OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 17:51:25 2013" -->
<!-- isoreceived="20130108225125" -->
<!-- sent="Tue, 8 Jan 2013 22:51:20 +0000" -->
<!-- isosent="20130108225120" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with MPI datatypes not defined as constants in	OpenMPI" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC380AD248_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAO65DGdruu0S1gsba58UPh_mpd7WNScA7uYWX0axp_3qo+GM-Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with MPI datatypes not defined as constants in	OpenMPI<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-08 17:51:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21092.php">Jeff Squyres (jsquyres): "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Previous message:</strong> <a href="21090.php">Crni Gorac: "[OMPI users] problem with MPI datatypes not defined as constants in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="21090.php">Crni Gorac: "[OMPI users] problem with MPI datatypes not defined as constants in OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 8, 2013, at 5:49 PM, Crni Gorac &lt;cgorac_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; Most MPI implementations (MPICH, Intel MPI) are defining MPI datatypes (MPI_INT, MPI_FLOAT etc.) as constants; in OpenMPI, these are practically pointers to corresponding internal structures (for example MPI_FLOAT is defined as pointer to mpi_float structure, etc.).  In trying to employ some C++ templates to automate mapping between C types and MPI datatypes (code provided below), I've encountered a problem with this, so I'm wondering - is OpenMPI approach in accordance with MPI standard?
</span><br>
<p>Yes.  
<br>
<p>The MPI spec doesn't specify the back-end types of MPI handles.  The two popular implementation choices are integers (usually C int's, such as with MPICH) and pointers (like Open MPI).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21092.php">Jeff Squyres (jsquyres): "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Previous message:</strong> <a href="21090.php">Crni Gorac: "[OMPI users] problem with MPI datatypes not defined as constants in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="21090.php">Crni Gorac: "[OMPI users] problem with MPI datatypes not defined as constants in OpenMPI"</a>
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
