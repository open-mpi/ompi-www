<?
$subject_val = "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 14:31:01 2009" -->
<!-- isoreceived="20090114193101" -->
<!-- sent="Wed, 14 Jan 2009 20:30:56 +0100" -->
<!-- isosent="20090114193056" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed" -->
<!-- id="1231961456.7475.53.camel_at_ricolap" -->
<!-- inreplyto="39C4635A-20B8-4F18-A9B6-EB7C10D65238_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-14 14:30:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5197.php">Brad Benton: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Previous message:</strong> <a href="5195.php">Edgar Gabriel: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>In reply to:</strong> <a href="5176.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5230.php">Jonathan Billings: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I have searched the whole day for a solution of that problem, but
<br>
unfortunately, I'm clueless :-( I cannot say which flag causes the
<br>
compile error. Furthermore, I'm also unable to reproduce this error on
<br>
some different platforms.
<br>
The coding style in the concerned source file looks also not special...
<br>
<p>My suggestion is to use the workaround (configure flag) for the 1.3
<br>
release. 
<br>
<p>On Wed, 2009-01-14 at 07:57 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Is there some code that can be fixed instead?  I.e., is this feature  
</span><br>
<span class="quotelev1">&gt; totally incompatible with whatever RPM compiler flags are used, or is  
</span><br>
<span class="quotelev1">&gt; it just some coding style that these particular flags don't like?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 14, 2009, at 5:05 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Another workaround should be to disable the I/O tracing feature of VT
</span><br>
<span class="quotelev2">&gt; &gt; by adding the configure option
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 	'--with-contrib-vt-flags=--disable-iotrace'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That will have the effect that the upcoming OMPI-rpm's have no support
</span><br>
<span class="quotelev2">&gt; &gt; for I/O tracing, but in our opinion it is not so bad...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Furthermore, we could add the configure option in
</span><br>
<span class="quotelev2">&gt; &gt; 'ompi/contrib/vt/configure.m4' to retain the feature-consistency  
</span><br>
<span class="quotelev2">&gt; &gt; between
</span><br>
<span class="quotelev2">&gt; &gt; the rpm's and the source packages.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Matthias
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, 2009-01-13 at 17:13 +0200, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I don't want to move changes ( default value of the flag), since  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; there
</span><br>
<span class="quotelev3">&gt; &gt;&gt; are important people, for whom it works :)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I also think that this is VT issue, but I guess we are the only one
</span><br>
<span class="quotelev3">&gt; &gt;&gt; who experience the errors.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; we can now overwrite this params from the environment as a  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; workaround,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mike comitted buildrpm.sh script to the trunk r20253 that allows
</span><br>
<span class="quotelev3">&gt; &gt;&gt; overwriting params from the environment.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; we observed the problem on CentOS 5.2 with boundled gcc and RedHat  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 5.2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; with boundled gcc.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #uname -a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Linux elfit1 2.6.18-92.el5 #1 SMP Tue Jun 10 18:51:06 EDT 2008 x86_64
</span><br>
<span class="quotelev3">&gt; &gt;&gt; x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #lsb_release -a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; LSB Version:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; :core-3.1-amd64:core-3.1-ia32:core-3.1-noarch:graphics-3.1- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; amd64:graphics-3.1-ia32:graphics-3.1-noarch
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Distributor ID: CentOS
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Description:    CentOS release 5.2 (Final)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Release:        5.2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Codename:       Final
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; gcc version 4.1.2 20071124 (Red Hat 4.1.2-42)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Lenny.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Tue, Jan 13, 2009 at 4:40 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm still guessing that this is a distro / compiler issue -- I can  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; build
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with the default flags just fine...?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Can you specify what distro / compiler you were using?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Also, if you want to move the changes that have been made to  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; buildrpm.sh to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the v1.3 branch, just file a CMR.  That file is not included in  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; release
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tarballs, so Tim can move it over at any time.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Jan 13, 2009, at 6:35 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; it seems that setting use_default_rpm_opt_flags to 0 solves the  
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; problem.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Maybe vt developers should take a look on it.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Sun, Jan 11, 2009 at 2:40 PM, Jeff Squyres  
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; This sounds like a distro/compiler version issue.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Can you narrow down the issue at all?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Jan 11, 2009, at 3:23 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; it doesnt happen if I do autogen, configure and make install,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; only when I try to make an rpm from the tar file.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Thu, Jan 8, 2009 at 9:43 PM, Jeff Squyres  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; This doesn't happen in a normal build of the same tree?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; I ask because both 1.3r20226 builds fine for me manually (i.e.,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; ./configure;make and buildrpm.sh).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jan 8, 2009, at 8:15 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am trying to build rpm from nightly snaposhots of 1.3
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; with the downloaded buildrpm.sh and ompi.spec file from
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://svn.open-mpi.org/svn/ompi/branches/v1.3/contrib/dist/linux/">http://svn.open-mpi.org/svn/ompi/branches/v1.3/contrib/dist/linux/</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am getting this error
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; .....................
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Making all in vtlib
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[5]: Entering directory
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; `/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/ 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI/BUILD/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.3rc3r20226/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,- 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -mtune=generic -MT vt_comp_gnu.o -MD -MP -MF .deps/ 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; vt_comp_gnu.Tpo -c
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -o
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; vt_comp_gnu.o vt_comp_gnu.c
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,- 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -mtune=generic -MT vt_memhook.o -MD -MP -MF .deps/ 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; vt_memhook.Tpo -c -o
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; vt_memhook.o vt_memhook.c
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,- 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -mtune=generic -MT vt_memreg.o -MD -MP -MF .deps/ 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; vt_memreg.Tpo -c -o
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; vt_memreg.o vt_memreg.c
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,- 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -mtune=generic -MT vt_iowrap.o -MD -MP -MF .deps/ 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; vt_iowrap.Tpo -c -o
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; vt_iowrap.o vt_iowrap.c
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mv -f .deps/vt_memreg.Tpo .deps/vt_memreg.Po
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,- 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -mtune=generic -MT vt_iowrap_helper.o -MD -MP -MF
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; .deps/vt_iowrap_helper.Tpo -c -o vt_iowrap_helper.o  
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; vt_iowrap_helper.c
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mv -f .deps/vt_memhook.Tpo .deps/vt_memhook.Po
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; gcc  -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -I../extlib/otf/otflib -I../extlib/otf/otflib     -D_GNU_SOURCE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -DBINDIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/bin\&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -DDATADIR=\&quot;/opt/openmpi/1.3rc3r20226-V00/gcc/share\&quot; -DRFG
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -DVT_MEMHOOK -DVT_IOWRAP  -O2 -g -pipe -Wall -Wp,- 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; D_FORTIFY_SOURCE=2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -fexceptions -fstack-protector --param=ssp-buffer-size=4 -m64
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -mtune=generic -MT rfg_regions.o -MD -MP -MF .deps/ 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rfg_regions.Tpo -c
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -o
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rfg_regions.o rfg_regions.c
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; vt_iowrap.c:1242: error: expected declaration specifiers or  
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; '...'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; before
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; numeric constant
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; vt_iowrap.c:1243: error: conflicting types for '__fprintf_chk'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mv -f .deps/vt_comp_gnu.Tpo .deps/vt_comp_gnu.Po
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[5]: *** [vt_iowrap.o] Error 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[5]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mv -f .deps/vt_iowrap_helper.Tpo .deps/vt_iowrap_helper.Po
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mv -f .deps/rfg_regions.Tpo .deps/rfg_regions.Po
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[5]: Leaving directory
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; `/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/ 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI/BUILD/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.3rc3r20226/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[4]: Leaving directory
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; `/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/ 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI/BUILD/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.3rc3r20226/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; `/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/ 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI/BUILD/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.3rc3r20226/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; `/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/ 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI/BUILD/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.3rc3r20226/ompi/contrib/vt'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; `/hpc/home/USERS/lennyb/work/svn/release/scripts/dist-1.3--1/ 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI/BUILD/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.3rc3r20226/ompi'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; error: Bad exit status from /var/tmp/rpm-tmp.32080 (%build)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; RPM build errors:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Bad exit status from /var/tmp/rpm-tmp.32080 (%build)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; RPM build errors:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Bad exit status from /var/tmp/rpm-tmp.32080 (%build)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; full error.log attached
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;ompi.ompi_build.31401.log&gt;&lt;mime-attachment.txt&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5197.php">Brad Benton: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Previous message:</strong> <a href="5195.php">Edgar Gabriel: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>In reply to:</strong> <a href="5176.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5230.php">Jonathan Billings: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
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
