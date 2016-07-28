<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 25 08:26:49 2013" -->
<!-- isoreceived="20130525122649" -->
<!-- sent="Sat, 25 May 2013 12:26:44 +0000" -->
<!-- isosent="20130525122644" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F63F4AE_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F0C9F5862_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-25 08:26:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21962.php">Tim Prince: "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21960.php">Ralph Castain: "Re: [OMPI users] two problems with openmpi-1.9r28534"</a>
<li><strong>In reply to:</strong> <a href="21955.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21962.php">Tim Prince: "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
<li><strong>Reply:</strong> <a href="21962.php">Tim Prince: "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 23, 2013, at 9:50 AM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Excellent.  Now I've read the FAQ and noticed that it doesn't mention the issue with the Fortran 90 .mod signatures.  Our applications are Fortran.  So your replies are very helpful -- now I know it really isn't practical for us to use the default OpenMPI shipped with RHEL6 since we use both Intel and PGI compilers and have several applications to accommodate.  Presumably if all the applications did INCLUDE 'mpif.h'  instead of 'USE MPI' then we could get things working, but it's not a great workaround.
</span><br>
<p>No, not even if they use mpif.h.  Here's a chunk of text from the v1.6 README:
<br>
<p>- While it is possible -- on some platforms -- to configure and build
<br>
&nbsp;&nbsp;Open MPI with one Fortran compiler and then build MPI applications
<br>
&nbsp;&nbsp;with a different Fortran compiler, this is not recommended.  Subtle
<br>
&nbsp;&nbsp;problems can arise at run time, even if the MPI application
<br>
&nbsp;&nbsp;compiled and linked successfully.
<br>
<p>&nbsp;&nbsp;Specifically, the following two cases may not be portable between
<br>
&nbsp;&nbsp;different Fortran compilers:
<br>
<p>&nbsp;&nbsp;1. The C constants MPI_F_STATUS_IGNORE and MPI_F_STATUSES_IGNORE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;will only compare properly to Fortran applications that were
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;created with Fortran compilers that that use the same
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;name-mangling scheme as the Fortran compiler with which Open MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;was configured.
<br>
<p>&nbsp;&nbsp;2. Fortran compilers may have different values for the logical
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.TRUE. constant.  As such, any MPI function that uses the Fortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGICAL type may only get .TRUE. values back that correspond to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the the .TRUE. value of the Fortran compiler with which Open MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;was configured.  Note that some Fortran compilers allow forcing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.TRUE. to be 1 and .FALSE. to be 0.  For example, the Portland
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Group compilers provide the &quot;-Munixlogical&quot; option, and Intel
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compilers (version &gt;= 8.) provide the &quot;-fpscomp logicals&quot; option.
<br>
<p>&nbsp;&nbsp;You can use the ompi_info command to see the Fortran compiler with
<br>
&nbsp;&nbsp;which Open MPI was configured.
<br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21962.php">Tim Prince: "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="21960.php">Ralph Castain: "Re: [OMPI users] two problems with openmpi-1.9r28534"</a>
<li><strong>In reply to:</strong> <a href="21955.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21962.php">Tim Prince: "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
<li><strong>Reply:</strong> <a href="21962.php">Tim Prince: "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
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
