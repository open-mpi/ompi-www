<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 19 14:47:36 2006" -->
<!-- isoreceived="20061019184736" -->
<!-- sent="Thu, 19 Oct 2006 14:48:07 -0400" -->
<!-- isosent="20061019184807" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="[OMPI users] configure script not hapy with OpenPBS" -->
<!-- id="CEECA3BE5A1E334EBB71ADD1B9ABEF820107F4FA_at_webmail.imi.nrc.ca" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Audet, Martin (<em>Martin.Audet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-19 14:48:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2014.php">Jeffrey B. Layton: "[OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<li><strong>Previous message:</strong> <a href="2012.php">George Bosilca: "Re: [OMPI users] problem abut openmpi running"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2016.php">Tim Prins: "Re: [OMPI users] configure script not hapy with OpenPBS"</a>
<li><strong>Reply:</strong> <a href="2016.php">Tim Prins: "Re: [OMPI users] configure script not hapy with OpenPBS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>When I tried to install OpenMPI on the front node of a cluster using OpenPBS batch system (e.g. --with-tm=/usr/open-pbs argument to configure), it didn't work and I got the error message:
<br>
<p>--- MCA component pls:tm (m4 configuration macro)
<br>
checking for MCA component pls:tm compile mode... dso
<br>
checking tm.h usability... yes
<br>
checking tm.h presence... yes
<br>
checking for tm.h... yes
<br>
looking for library in lib
<br>
checking for tm_init in -lpbs... no
<br>
looking for library in lib64
<br>
checking for tm_init in -lpbs... no
<br>
checking tm.h usability... yes
<br>
checking tm.h presence... yes
<br>
checking for tm.h... yes
<br>
looking for library in lib
<br>
checking for tm_finalize in -ltorque... no
<br>
looking for library in lib64
<br>
checking for tm_finalize in -ltorque... no
<br>
configure: error: TM support requested but not found.  Aborting
<br>
<p>By looking in the very long configure script I found two typo errors in variable name:
<br>
<p>&nbsp;&nbsp;&quot;ompi_check_tm_hapy&quot; is set at lines 68164 and 76084
<br>
&nbsp;&nbsp;&quot;ompi_check_loadleveler_hapy&quot; is set at line 73086
<br>
<p>where the correct names are obviously &quot;ompi_check_tm_happy&quot; and &quot;ompi_check_loadleveler_happy&quot; (e.g. &quot;happy&quot; not &quot;hapy&quot;) when looking to the variables used arround.
<br>
<p>I corrected the variables names but unfortunately it didn't fixed my problem, configure stoped with the same error message (maybe you should also correct it in your &quot;svn&quot; repository since this may be a &quot;latent&quot; bug).
<br>
<p>I'm now questionning why didn't the configuration script found the 'tm_init'  symbol in libpbs.a since the following command:
<br>
<p>nm /usr/open-pbs/lib/libpbs.a  | grep -e '\&lt;tm_init\&gt;' -e '\&lt;tm_finalize\&gt;'
<br>
<p>prints:
<br>
<p>0000000000000cd0 T tm_finalize
<br>
0000000000001270 T tm_init
<br>
<p>Is it possible that on an EM64T Linux system the configure script require that lib/libpbs.a or lib64/libpbs.a be a 64 bit library to be happy (lib64/libpbs.a doesn't exist and lib/libpbs.a is a 32 bit library on our system since the OpenPBS version we use is a bit old (2.3.x) and didn't appear to be 64 bit clean) ?
<br>
<p><p>Martin Audet
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2013/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2014.php">Jeffrey B. Layton: "[OMPI users] Problem with PGI 6.1 and OpenMPI-1.1.1"</a>
<li><strong>Previous message:</strong> <a href="2012.php">George Bosilca: "Re: [OMPI users] problem abut openmpi running"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2016.php">Tim Prins: "Re: [OMPI users] configure script not hapy with OpenPBS"</a>
<li><strong>Reply:</strong> <a href="2016.php">Tim Prins: "Re: [OMPI users] configure script not hapy with OpenPBS"</a>
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
