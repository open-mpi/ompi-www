<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 19 17:38:31 2006" -->
<!-- isoreceived="20061019213831" -->
<!-- sent="Thu, 19 Oct 2006 17:38:15 -0400" -->
<!-- isosent="20061019213815" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure script not hapy with OpenPBS" -->
<!-- id="8189A934-11AC-49A6-842E-9BDBD0E67979_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CEECA3BE5A1E334EBB71ADD1B9ABEF820107F4FA_at_webmail.imi.nrc.ca" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-19 17:38:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2017.php">Lydia Heck: "Re: [OMPI users] job fails to terminate"</a>
<li><strong>Previous message:</strong> <a href="2015.php">Jeffrey B. Layton: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<li><strong>In reply to:</strong> <a href="2013.php">Audet, Martin: "[OMPI users] configure script not hapy with OpenPBS"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Martin,
<br>
<p>Yeah, we appear to have some mistakes in the configuration macros. I  
<br>
will correct them, but they really should not be effecting things in  
<br>
this instance.
<br>
<p>Whether Open MPI expects a 32 bit or 64 bit library depends on the  
<br>
compiler. If your compiler generates 64 bit executables by default,  
<br>
we will by default compile Open MPI in 64 bit mode and expect 64 bit  
<br>
libraries.
<br>
<p>Unfortunately there is no single simple flag to switch between 64 bit  
<br>
and 32 bit mode. With gcc I use the follow configure line to compile  
<br>
in 32 bit mode:
<br>
./configure FCFLAGS=-m32 FFLAGS=-m32 CFLAGS=-m32 CXXFLAGS=-m32 --with- 
<br>
wrapper-cflags=-m32 --with-wrapper-cxxflags=-m32 --with-wrapper- 
<br>
fflags=-m32 --with-wrapper-fcflags=-m32
<br>
<p>I know that is a bit unwieldy, but I believe that is the best way to  
<br>
do it right now.
<br>
<p>If this does not work, please send the information requested here:
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>On Oct 19, 2006, at 2:48 PM, Audet, Martin wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I tried to install OpenMPI on the front node of a cluster  
</span><br>
<span class="quotelev1">&gt; using OpenPBS batch system (e.g. --with-tm=/usr/open-pbs argument  
</span><br>
<span class="quotelev1">&gt; to configure), it didn't work and I got the error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component pls:tm (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component pls:tm compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking tm.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking tm.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for tm.h... yes
</span><br>
<span class="quotelev1">&gt; looking for library in lib
</span><br>
<span class="quotelev1">&gt; checking for tm_init in -lpbs... no
</span><br>
<span class="quotelev1">&gt; looking for library in lib64
</span><br>
<span class="quotelev1">&gt; checking for tm_init in -lpbs... no
</span><br>
<span class="quotelev1">&gt; checking tm.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking tm.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for tm.h... yes
</span><br>
<span class="quotelev1">&gt; looking for library in lib
</span><br>
<span class="quotelev1">&gt; checking for tm_finalize in -ltorque... no
</span><br>
<span class="quotelev1">&gt; looking for library in lib64
</span><br>
<span class="quotelev1">&gt; checking for tm_finalize in -ltorque... no
</span><br>
<span class="quotelev1">&gt; configure: error: TM support requested but not found.  Aborting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By looking in the very long configure script I found two typo  
</span><br>
<span class="quotelev1">&gt; errors in variable name:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   &quot;ompi_check_tm_hapy&quot; is set at lines 68164 and 76084
</span><br>
<span class="quotelev1">&gt;   &quot;ompi_check_loadleveler_hapy&quot; is set at line 73086
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where the correct names are obviously &quot;ompi_check_tm_happy&quot; and  
</span><br>
<span class="quotelev1">&gt; &quot;ompi_check_loadleveler_happy&quot; (e.g. &quot;happy&quot; not &quot;hapy&quot;) when  
</span><br>
<span class="quotelev1">&gt; looking to the variables used arround.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I corrected the variables names but unfortunately it didn't fixed  
</span><br>
<span class="quotelev1">&gt; my problem, configure stoped with the same error message (maybe you  
</span><br>
<span class="quotelev1">&gt; should also correct it in your &quot;svn&quot; repository since this may be a  
</span><br>
<span class="quotelev1">&gt; &quot;latent&quot; bug).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm now questionning why didn't the configuration script found the  
</span><br>
<span class="quotelev1">&gt; 'tm_init'  symbol in libpbs.a since the following command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; nm /usr/open-pbs/lib/libpbs.a  | grep -e '\&lt;tm_init\&gt;' -e  
</span><br>
<span class="quotelev1">&gt; '\&lt;tm_finalize\&gt;'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; prints:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0000000000000cd0 T tm_finalize
</span><br>
<span class="quotelev1">&gt; 0000000000001270 T tm_init
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible that on an EM64T Linux system the configure script  
</span><br>
<span class="quotelev1">&gt; require that lib/libpbs.a or lib64/libpbs.a be a 64 bit library to  
</span><br>
<span class="quotelev1">&gt; be happy (lib64/libpbs.a doesn't exist and lib/libpbs.a is a 32 bit  
</span><br>
<span class="quotelev1">&gt; library on our system since the OpenPBS version we use is a bit old  
</span><br>
<span class="quotelev1">&gt; (2.3.x) and didn't appear to be 64 bit clean) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Martin Audet
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
<li><strong>Next message:</strong> <a href="2017.php">Lydia Heck: "Re: [OMPI users] job fails to terminate"</a>
<li><strong>Previous message:</strong> <a href="2015.php">Jeffrey B. Layton: "Re: [OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<li><strong>In reply to:</strong> <a href="2013.php">Audet, Martin: "[OMPI users] configure script not hapy with OpenPBS"</a>
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
