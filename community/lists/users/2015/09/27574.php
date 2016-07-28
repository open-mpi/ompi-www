<?
$subject_val = "Re: [OMPI users] OpenMPI 1.10.0 and old SUSE SLES 11 SP3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 14 19:44:00 2015" -->
<!-- isoreceived="20150914234400" -->
<!-- sent="Tue, 15 Sep 2015 08:43:59 +0900" -->
<!-- isosent="20150914234359" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.10.0 and old SUSE SLES 11 SP3" -->
<!-- id="CAAkFZ5twViw0U+LNUFEbkJH_zU00To8hUx6C6M3ji1STj6ryUw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="51B1917D-37E2-4130-8FFD-FB0E7973A039_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.10.0 and old SUSE SLES 11 SP3<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-14 19:43:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27575.php">Patrick Begou: "[OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27573.php">Filippo Spiga: "[OMPI users] OpenMPI 1.10.0 and old SUSE SLES 11 SP3"</a>
<li><strong>In reply to:</strong> <a href="27573.php">Filippo Spiga: "[OMPI users] OpenMPI 1.10.0 and old SUSE SLES 11 SP3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Filippo,
<br>
<p>the linker might look for the static libz library (e.g. libz.a)
<br>
can you install it and try again ?
<br>
<p>if you configure with --enable-static, you will build both shared and
<br>
static libraries.
<br>
per your message, you need --enable-static, so you might want to configure with
<br>
--enable-static --disable-shared
<br>
<p>that being said, i am not sure you do need --enable-static.
<br>
are mxm/fca/hcoll in your $LD_LIBRARY_PATH or ld.so.conf ?
<br>
if not, i recommend you set your LD_LIBRARY_PATH *before* you
<br>
configure and make openmpi
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tue, Sep 15, 2015 at 8:14 AM, Filippo Spiga &lt;spiga.filippo_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello everybody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I desperately trying to compile on a SLES 11 SP3 OpenMPI 1.10.0 with MXM and
</span><br>
<span class="quotelev1">&gt; FCA support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export MXM_DIR=/opt/mellanox/mxm
</span><br>
<span class="quotelev1">&gt; export KNEM_DIR=$(find /opt -maxdepth 1 -type d -name &quot;knem*&quot; -print0)
</span><br>
<span class="quotelev1">&gt; export FCA_DIR=/opt/mellanox/fca
</span><br>
<span class="quotelev1">&gt; export HCOLL_DIR=/opt/mellanox/hcoll
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rm -rf build
</span><br>
<span class="quotelev1">&gt; mkdir build
</span><br>
<span class="quotelev1">&gt; cd build
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../configure --prefix=$FINAL_DIR --with-lsf --enable-mca-no-build=btl-usnic
</span><br>
<span class="quotelev1">&gt; --with-verbs --with-hwloc=internal --with-fca=$FCA_DIR --with-mxm=$MXM_DIR
</span><br>
<span class="quotelev1">&gt; --with-knem=$KNEM_DIR --enable-static
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had to enable static otherwise MXM fails. Anyway, almost at the end it
</span><br>
<span class="quotelev1">&gt; continues to fails because of -lz problem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Creating mpi/man/man3/OpenMPI.3 man page...
</span><br>
<span class="quotelev1">&gt;   CCLD     libmpi.la
</span><br>
<span class="quotelev1">&gt; /usr/lib64/gcc/x86_64-suse-linux/4.3/../../../../x86_64-suse-linux/bin/ld:
</span><br>
<span class="quotelev1">&gt; cannot find -lz
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libmpi.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/tmp/openmpi-1.10.0/build/ompi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/tmp/openmpi-1.10.0/build/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestion to overcome this issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The kernel is not very old but the GCC is...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $gcc --version
</span><br>
<span class="quotelev1">&gt; gcc (SUSE Linux) 4.3.4 [gcc-4_3-branch revision 152973]
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2008 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ uname -a
</span><br>
<span class="quotelev1">&gt; Linux testing 3.0.93-0.8-default #1 SMP Tue Aug 27 08:44:18 UTC 2013
</span><br>
<span class="quotelev1">&gt; (70ed288) x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see libz.so under /lib64 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Mr. Filippo SPIGA, M.Sc.
</span><br>
<span class="quotelev1">&gt; <a href="http://fspiga.github.io">http://fspiga.github.io</a> ~ skype: filippo.spiga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#171;Nobody will drive us out of Cantor's paradise.&#194;&#187; ~ David Hilbert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *****
</span><br>
<span class="quotelev1">&gt; Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL
</span><br>
<span class="quotelev1">&gt; and may be privileged or otherwise protected from disclosure. The contents
</span><br>
<span class="quotelev1">&gt; are not to be disclosed to anyone other than the addressee. Unauthorized
</span><br>
<span class="quotelev1">&gt; recipients are requested to preserve this confidentiality and to advise the
</span><br>
<span class="quotelev1">&gt; sender immediately of any error in transmission.&quot;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27573.php">http://www.open-mpi.org/community/lists/users/2015/09/27573.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27575.php">Patrick Begou: "[OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27573.php">Filippo Spiga: "[OMPI users] OpenMPI 1.10.0 and old SUSE SLES 11 SP3"</a>
<li><strong>In reply to:</strong> <a href="27573.php">Filippo Spiga: "[OMPI users] OpenMPI 1.10.0 and old SUSE SLES 11 SP3"</a>
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
