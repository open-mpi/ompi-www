<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling	OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 25 13:11:39 2013" -->
<!-- isoreceived="20130525171139" -->
<!-- sent="Sat, 25 May 2013 12:11:25 -0500" -->
<!-- isosent="20130525171125" -->
<!-- name="Ed Blosch" -->
<!-- email="eblosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: basic questions about compiling	OpenMPI" -->
<!-- id="o0lrw9haakqifvrkfg7r3e2r.1369501885720_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] EXTERNAL: Re: basic questions about compiling	OpenMPI" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: basic questions about compiling	OpenMPI<br>
<strong>From:</strong> Ed Blosch (<em>eblosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-25 13:11:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21964.php">Hayato KUNIIE: "[OMPI users] -Re Post- MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<li><strong>Previous message:</strong> <a href="21962.php">Tim Prince: "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Much appreciated, guys. &#194;&#160;I am a middle man in a discussion over whether MPI should be handled by apps people or system people and there was some confusion when we saw RHEL6 had an RPM for OpenMpi. Your comments make it clear that there is a pretty strong &#194;&#160;preference to build OpenMpi on the system to be used, with the compilers that match your apps compiler. Just a prereq for supporting a development environment
<br>
<p>-------- Original message --------
<br>
From: Tim Prince &lt;n8tm_at_[hidden]&gt; 
<br>
Date:  
<br>
To: users_at_[hidden] 
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: basic questions about compiling	OpenMPI 
<br>
&nbsp;
<br>
On 5/25/2013 8:26 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On May 23, 2013, at 9:50 AM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Excellent.&#194;&#160; Now I've read the FAQ and noticed that it doesn't mention the issue with the Fortran 90 .mod signatures.&#194;&#160; Our applications are Fortran.&#194;&#160; So your replies are very helpful -- now I know it really isn't practical for us to use the default OpenMPI shipped with RHEL6 since we use both Intel and PGI compilers and have several applications to accommodate.&#194;&#160; Presumably if all the applications did INCLUDE 'mpif.h'&#194;&#160; instead of 'USE MPI' then we could get things working, but it's not a great workaround.
</span><br>
<span class="quotelev1">&gt; No, not even if they use mpif.h.&#194;&#160; Here's a chunk of text from the v1.6 README:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - While it is possible -- on some platforms -- to configure and build
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160; Open MPI with one Fortran compiler and then build MPI applications
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160; with a different Fortran compiler, this is not recommended.&#194;&#160; Subtle
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160; problems can arise at run time, even if the MPI application
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160; compiled and linked successfully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160; Specifically, the following two cases may not be portable between
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160; different Fortran compilers:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160; 1. The C constants MPI_F_STATUS_IGNORE and MPI_F_STATUSES_IGNORE
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; will only compare properly to Fortran applications that were
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; created with Fortran compilers that that use the same
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; name-mangling scheme as the Fortran compiler with which Open MPI
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; was configured.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160; 2. Fortran compilers may have different values for the logical
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; .TRUE. constant.&#194;&#160; As such, any MPI function that uses the Fortran
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; LOGICAL type may only get .TRUE. values back that correspond to
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; the the .TRUE. value of the Fortran compiler with which Open MPI
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; was configured.&#194;&#160; Note that some Fortran compilers allow forcing
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; .TRUE. to be 1 and .FALSE. to be 0.&#194;&#160; For example, the Portland
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Group compilers provide the &quot;-Munixlogical&quot; option, and Intel
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; compilers (version &gt;= 8.) provide the &quot;-fpscomp logicals&quot; option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160; You can use the ompi_info command to see the Fortran compiler with
</span><br>
<span class="quotelev1">&gt;&#194;&#160;&#194;&#160;&#194;&#160; which Open MPI was configured.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Even when the name mangling obstacle doesn't arise (it shouldn't for the 
<br>
cited case of gfortran vs. ifort), run-time library function usage is 
<br>
likely to conflict between the compiler used to build the MPI Fortran 
<br>
library and the compiler used to build the application. So there really 
<br>
isn't a good incentive to retrogress away from the USE files simply to 
<br>
avoid one aspect of mixing incompatible compilers.
<br>
<p><pre>
-- 
Tim Prince
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21963/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21964.php">Hayato KUNIIE: "[OMPI users] -Re Post- MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<li><strong>Previous message:</strong> <a href="21962.php">Tim Prince: "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
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
