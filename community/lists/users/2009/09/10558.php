<?
$subject_val = "Re: [OMPI users] build problems - undefined	referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  2 08:58:02 2009" -->
<!-- isoreceived="20090902125802" -->
<!-- sent="Wed, 02 Sep 2009 09:01:14 -0400" -->
<!-- isosent="20090902130114" -->
<!-- name="Michael Hines" -->
<!-- email="michael.hines_at_[hidden]" -->
<!-- subject="Re: [OMPI users] build problems - undefined	referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install" -->
<!-- id="1251896474.10102.488.camel_at_hines490" -->
<!-- inreplyto="07E057C6-ACA5-4C46-80E3-FA45E119E575_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] build problems - undefined	referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install<br>
<strong>From:</strong> Michael Hines (<em>michael.hines_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-02 09:01:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10559.php">Michael Hines: "Re: [OMPI users] build problems - undefined	referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<li><strong>Previous message:</strong> <a href="10557.php">Lee Amy: "[OMPI users] Help: Infiniband interface hang"</a>
<li><strong>In reply to:</strong> <a href="10551.php">Jeff Squyres: "Re: [OMPI users] build problems - undefined referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10559.php">Michael Hines: "Re: [OMPI users] build problems - undefined	referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello.
<br>
Thanks!
<br>
On Wed, 2009-09-02 at 10:51 +0300, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 27, 2009, at 8:34 PM, Michael Hines wrote:
</span><br>
...
<br>
<span class="quotelev2">&gt; &gt; ltdl.c:(.text+0x10d3): undefined reference to
</span><br>
<span class="quotelev2">&gt; &gt; `lt_libltdlc_LTX_preloaded_symbols'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm.  This feels like a mismatch of libtool somehow...  (ltdl is a  
</span><br>
<span class="quotelev1">&gt; part of the larger Libtool package).  Can you send all the information  
</span><br>
<span class="quotelev1">&gt; listed here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Enclosed. I started from openmpi-1.3.3.tar.gz and
<br>
tar xzf ~/Desktop/openmpi-1.3.3.tar.gz
<br>
cd openmpi-1.3.3
<br>
./configure --prefix=$HOME/openmpi --disable-mpi-f77 --disable-mpi-f90
<br>
&amp;&gt; config.out
<br>
make all &amp;&gt; make.out
<br>
tar czf ompibld.tgz config.out config.log make.out
<br>
<p>...
<br>
<span class="quotelev2">&gt; &gt;   /bin/sh ../../../libtool   --mode=install /usr/bin/install -c
</span><br>
<span class="quotelev2">&gt; &gt; opal_wrapper '/home/hines/openmpi/bin'
</span><br>
<span class="quotelev2">&gt; &gt; ./opal_wrapper: line 1: ELF: command not found
</span><br>
<span class="quotelev2">&gt; &gt; libtool: install: invalid libtool wrapper script `opal_wrapper'
</span><br>
<p><span class="quotelev1">&gt; This seems like an even bigger problem -- ELF is not a command, so how  
</span><br>
<span class="quotelev1">&gt; it's trying to execute that seems pretty nebulous.
</span><br>
I guess opal_wrapper is supposed to be a script that contains the
<br>
executable but it turned out just to be the executable. If the earlier
<br>
issue is resolved (presumably libtool related) this may go away
<br>
as well.
<br>
<p>-Michael
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10558/ompibld.tgz">ompibld.tgz</a>
</ul>
<!-- attachment="ompibld.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10559.php">Michael Hines: "Re: [OMPI users] build problems - undefined	referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<li><strong>Previous message:</strong> <a href="10557.php">Lee Amy: "[OMPI users] Help: Infiniband interface hang"</a>
<li><strong>In reply to:</strong> <a href="10551.php">Jeff Squyres: "Re: [OMPI users] build problems - undefined referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10559.php">Michael Hines: "Re: [OMPI users] build problems - undefined	referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
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
