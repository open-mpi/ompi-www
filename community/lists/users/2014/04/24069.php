<?
$subject_val = "[OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable __LDBL_MANT_DIG__";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  6 09:50:57 2014" -->
<!-- isoreceived="20140406135057" -->
<!-- sent="Sun, 6 Apr 2014 21:50:51 +0800" -->
<!-- isosent="20140406135051" -->
<!-- name="Filippo Spiga" -->
<!-- email="spiga.filippo_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable __LDBL_MANT_DIG__" -->
<!-- id="FBED1EE8-CB9C-456B-89DA-D221399DBD58_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable __LDBL_MANT_DIG__<br>
<strong>From:</strong> Filippo Spiga (<em>spiga.filippo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-06 09:50:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24070.php">Chen Bill: "[OMPI users] Openmpi 1.8 &quot;rmaps seq&quot; doesn't work"</a>
<li><strong>Previous message:</strong> <a href="24068.php">Matthieu Brucher: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24129.php">Filippo Spiga: "Re: [OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable __LDBL_MANT_DIG__"</a>
<li><strong>Reply:</strong> <a href="24129.php">Filippo Spiga: "Re: [OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable __LDBL_MANT_DIG__"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
&nbsp;&nbsp;I am trying to compile Open MPI 1.8 with PGI 13.6. I am using on purpose this old version of PGI because of results and performance comparisons with old benchmarks. I run configure in this way:
<br>
<p>./configure  CC=pgcc CXX=pgCC FC=pgf90 F90=pgfortran CFLAGS=&quot;-noswitcherror&quot; FCFLAGS=&quot;-noswitcherror&quot; CXXFLAGS=&quot;-noswitcherror&quot; --prefix=/usr/local/Cluster-Users/fs395/openmpi-1.8.0/pgi-13.6 --with-hwloc=internal --enable-mca-no-build=btl-usnic --with-verbs
<br>
<p><p>and here where configure got stuck:
<br>
<p>make[2]: Entering directory `/home/fs395/archive/openmpi-1.8/build/opal/datatype'
<br>
&nbsp;&nbsp;CCLD     libdatatype_reliable.la
<br>
&nbsp;&nbsp;CC       opal_convertor.lo
<br>
PGC-S-0039-Use of undeclared variable __LDBL_MANT_DIG__ (../../../opal/util/arch.h: 268)
<br>
PGC/x86 Linux 13.6-0: compilation completed with severe errors
<br>
make[2]: *** [opal_convertor.lo] Error 1
<br>
make[2]: Leaving directory `/home/fs395/archive/openmpi-1.8/build/opal/datatype'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory `/home/fs395/archive/openmpi-1.8/build/opal'
<br>
make: *** [install-recursive] Error 1
<br>
<p><p>Any suggestions? Googling does not help much...
<br>
<p>F
<br>
<p><pre>
--
Mr. Filippo SPIGA, M.Sc.
<a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
&#171;Nobody will drive us out of Cantor's paradise.&#187; ~ David Hilbert
*****
Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24070.php">Chen Bill: "[OMPI users] Openmpi 1.8 &quot;rmaps seq&quot; doesn't work"</a>
<li><strong>Previous message:</strong> <a href="24068.php">Matthieu Brucher: "Re: [OMPI users] performance of MPI_Iallgatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24129.php">Filippo Spiga: "Re: [OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable __LDBL_MANT_DIG__"</a>
<li><strong>Reply:</strong> <a href="24129.php">Filippo Spiga: "Re: [OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable __LDBL_MANT_DIG__"</a>
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
