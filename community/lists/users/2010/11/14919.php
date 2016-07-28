<?
$subject_val = "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 15:36:22 2010" -->
<!-- isoreceived="20101129203622" -->
<!-- sent="Mon, 29 Nov 2010 14:36:11 -0600" -->
<!-- isosent="20101129203611" -->
<!-- name="Nehemiah Dacres" -->
<!-- email="dacresni_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express" -->
<!-- id="AANLkTikqLvrcZG8SwgOZh6ZH+54va3ta7eEXJsbP96GG_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CF407CA.3050501_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express<br>
<strong>From:</strong> Nehemiah Dacres (<em>dacresni_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 15:36:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14920.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>Previous message:</strong> <a href="14918.php">Gus Correa: "Re: [OMPI users] compiling Openmpi on solaris studio express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14920.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>Reply:</strong> <a href="14920.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thank you, you have been doubly helpful, but I am having linking errors and
<br>
I do not know what the solaris studio compiler's preferred linker is. The
<br>
<p>the configure statement was
<br>
<p>./configure --prefix=/state/partition1/apps/sunmpi/ --enable-mpi-threads
<br>
--with-sge --enable-static --enable-sparse-groups
<br>
CC=/opt/oracle/solstudio12.2/bin/suncc
<br>
CXX=/opt/oracle/solstudio12.2/bin/sunCC
<br>
F77=/opt/oracle/solstudio12.2/bin/sunf77
<br>
FC=/opt/oracle/solstudio12.2/bin/sunf90
<br>
<p>&nbsp;&nbsp;&nbsp;compile statement was
<br>
<p>make all install 2&gt;errors
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;error below is
<br>
<p>f90: Warning: Option -path passed to ld, if ld is invoked, ignored otherwise
<br>
f90: Warning: Option -path passed to ld, if ld is invoked, ignored otherwise
<br>
f90: Warning: Option -path passed to ld, if ld is invoked, ignored otherwise
<br>
f90: Warning: Option -path passed to ld, if ld is invoked, ignored otherwise
<br>
f90: Warning: Option -soname passed to ld, if ld is invoked, ignored
<br>
otherwise
<br>
/usr/bin/ld: unrecognized option '-path'
<br>
/usr/bin/ld: use the --help option for usage information
<br>
make[4]: *** [libmpi_f90.la] Error 2
<br>
make[3]: *** [all-recursive] Error 1
<br>
make[2]: *** [all] Error 2
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p>am I doing this wrong? are any of those configure flags unnecessary or
<br>
inappropriate
<br>
<p><p><p>On Mon, Nov 29, 2010 at 2:06 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Nehemiah Dacres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I want to compile openmpi to work with the solaris studio express  or
</span><br>
<span class="quotelev2">&gt;&gt; solaris studio. This is a different version than is installed on
</span><br>
<span class="quotelev2">&gt;&gt; rockscluster 5.2  and would like to know if there any gotchas or configure
</span><br>
<span class="quotelev2">&gt;&gt; flags I should use to get it working or portable to nodes on the cluster.
</span><br>
<span class="quotelev2">&gt;&gt; Software-wise,  it is a fairly homogeneous environment with only slight
</span><br>
<span class="quotelev2">&gt;&gt; variations on the hardware side which could be isolated (machinefile flag
</span><br>
<span class="quotelev2">&gt;&gt; and what-not)
</span><br>
<span class="quotelev2">&gt;&gt; Please advise
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Hi Nehemiah
</span><br>
<span class="quotelev1">&gt; I just answered your email to the OpenMPI list.
</span><br>
<span class="quotelev1">&gt; I want to add that if you build OpenMPI with Torque support,
</span><br>
<span class="quotelev1">&gt; the machine file for each is not needed, it is provided by Torque.
</span><br>
<span class="quotelev1">&gt; I believe the same is true for SGE (but I don't use SGE).
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Nehemiah I. Dacres
System Administrator
Advanced Technology Group Saint Louis University
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14919/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14920.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>Previous message:</strong> <a href="14918.php">Gus Correa: "Re: [OMPI users] compiling Openmpi on solaris studio express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14920.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>Reply:</strong> <a href="14920.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
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
