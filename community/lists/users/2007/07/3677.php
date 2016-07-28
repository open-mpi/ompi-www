<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 13 15:40:37 2007" -->
<!-- isoreceived="20070713194037" -->
<!-- sent="Fri, 13 Jul 2007 15:40:14 -0400" -->
<!-- isosent="20070713194014" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling openmpi-1.2.3 on Core 2 Duo with icc" -->
<!-- id="A4778177-A392-400F-8CCD-C87EE28CB4CA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4697B340.7070108_at_lbl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-13 15:40:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3678.php">Isaac Huang: "[OMPI users] end-to-end data reliability"</a>
<li><strong>Previous message:</strong> <a href="3676.php">Robert Latham: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>In reply to:</strong> <a href="3674.php">David Prendergast: "[OMPI users] Problem compiling openmpi-1.2.3 on Core 2 Duo with icc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per another mail on the list, I should be getting access to icc 10.0  
<br>
within a few [business] days.  I'll have a look at this then (I don't  
<br>
know if anyone on the team has tested with intel 10.0 before this).
<br>
<p><p>On Jul 13, 2007, at 1:15 PM, David Prendergast wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; I noticed some problem in the compile of openmpi-1.2.3 on a Core 2  
</span><br>
<span class="quotelev1">&gt; Duo processor using intel compilers (icc Version 10.0).
</span><br>
<span class="quotelev1">&gt; I have attached the output of make.
</span><br>
<span class="quotelev1">&gt; This problem does not exist in openmpi-1.2.2 which I have compiled  
</span><br>
<span class="quotelev1">&gt; and run successfully on the same machine with the same compiler.
</span><br>
<span class="quotelev1">&gt; David.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in config
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; config'
</span><br>
<span class="quotelev1">&gt; make[1]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/config'
</span><br>
<span class="quotelev1">&gt; Making all in contrib
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; contrib'
</span><br>
<span class="quotelev1">&gt; make[1]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; contrib'
</span><br>
<span class="quotelev1">&gt; Making all in opal
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal'
</span><br>
<span class="quotelev1">&gt; Making all in include
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/include'
</span><br>
<span class="quotelev1">&gt; make  all-am
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/include'
</span><br>
<span class="quotelev1">&gt; make[3]: Nothing to be done for `all-am'.
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; include'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; include'
</span><br>
<span class="quotelev1">&gt; Making all in libltdl
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/libltdl'
</span><br>
<span class="quotelev1">&gt; make  all-am
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/libltdl'
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; libltdl'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; libltdl'
</span><br>
<span class="quotelev1">&gt; Making all in asm
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/asm'
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; asm'
</span><br>
<span class="quotelev1">&gt; Making all in etc
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/etc'
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; etc'
</span><br>
<span class="quotelev1">&gt; Making all in event
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/event'
</span><br>
<span class="quotelev1">&gt; Making all in compat
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/event/compat'
</span><br>
<span class="quotelev1">&gt; Making all in sys
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/event/compat/sys'
</span><br>
<span class="quotelev1">&gt; make[4]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; event/compat/sys'
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/event/compat'
</span><br>
<span class="quotelev1">&gt; make[4]: Nothing to be done for `all-am'.
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; event/compat'
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; event/compat'
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/event'
</span><br>
<span class="quotelev1">&gt; make[3]: Nothing to be done for `all-am'.
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; event'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; event'
</span><br>
<span class="quotelev1">&gt; Making all in util
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/util'
</span><br>
<span class="quotelev1">&gt; Making all in keyval
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/util/keyval'
</span><br>
<span class="quotelev1">&gt; make[3]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; util/keyval'
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/util'
</span><br>
<span class="quotelev1">&gt; make[3]: Nothing to be done for `all-am'.
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; util'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; util'
</span><br>
<span class="quotelev1">&gt; Making all in mca/base
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/mca/base'
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; mca/base'
</span><br>
<span class="quotelev1">&gt; Making all in mca/backtrace
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/mca/backtrace'
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; mca/backtrace'
</span><br>
<span class="quotelev1">&gt; Making all in mca/installdirs
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/mca/installdirs'
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; mca/installdirs'
</span><br>
<span class="quotelev1">&gt; Making all in mca/maffinity
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/mca/maffinity'
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; mca/maffinity'
</span><br>
<span class="quotelev1">&gt; Making all in mca/memcpy
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/mca/memcpy'
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; mca/memcpy'
</span><br>
<span class="quotelev1">&gt; Making all in mca/memory
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/mca/memory'
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; mca/memory'
</span><br>
<span class="quotelev1">&gt; Making all in mca/paffinity
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/mca/paffinity'
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; mca/paffinity'
</span><br>
<span class="quotelev1">&gt; Making all in mca/timer
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/mca/timer'
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; mca/timer'
</span><br>
<span class="quotelev1">&gt; Making all in mca/backtrace/execinfo
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/mca/backtrace/execinfo'
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; mca/backtrace/execinfo'
</span><br>
<span class="quotelev1">&gt; Making all in mca/installdirs/env
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/mca/installdirs/env'
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; mca/installdirs/env'
</span><br>
<span class="quotelev1">&gt; Making all in mca/installdirs/config
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/mca/installdirs/config'
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; mca/installdirs/config'
</span><br>
<span class="quotelev1">&gt; Making all in mca/memory/ptmalloc2
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/mca/memory/ptmalloc2'
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; mca/memory/ptmalloc2'
</span><br>
<span class="quotelev1">&gt; Making all in mca/timer/linux
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/mca/timer/linux'
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; mca/timer/linux'
</span><br>
<span class="quotelev1">&gt; Making all in .
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/opal'
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `all-am'.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal'
</span><br>
<span class="quotelev1">&gt; Making all in mca/maffinity/first_use
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/mca/maffinity/first_use'
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; mca/maffinity/first_use'
</span><br>
<span class="quotelev1">&gt; Making all in mca/paffinity/linux
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/mca/paffinity/linux'
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; mca/paffinity/linux'
</span><br>
<span class="quotelev1">&gt; Making all in tools/wrappers
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/davegp/Desktop/openmpi-1.2.3/ 
</span><br>
<span class="quotelev1">&gt; opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CC --mode=link icc  -O3 -DNDEBUG - 
</span><br>
<span class="quotelev1">&gt; finline-functions -fno-strict-aliasing -restrict -pthread  -export- 
</span><br>
<span class="quotelev1">&gt; dynamic   -o opal_wrapper  opal_wrapper.o ../../../opal/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.la -lnsl -lutil
</span><br>
<span class="quotelev1">&gt; eval: 1: libtool_args+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: compile_command+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: finalize_command+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: libtool_args+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: compile_command+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: finalize_command+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: libtool_args+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: compile_command+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: finalize_command+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: libtool_args+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: compile_command+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: finalize_command+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: libtool_args+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: compile_command+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: finalize_command+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: libtool_args+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: compile_command+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: finalize_command+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: libtool_args+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: libtool_args+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: compile_command+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: finalize_command+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: libtool_args+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: compile_command+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: finalize_command+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: libtool_args+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: compile_command+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: finalize_command+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: libtool_args+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: libtool_args+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: libtool_args+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: compile_command+=: not found
</span><br>
<span class="quotelev1">&gt; eval: 1: finalize_command+=: not found
</span><br>
<span class="quotelev1">&gt; libtool: link: icc  -pthread ../../../opal/.libs/libopen-pal.so - 
</span><br>
<span class="quotelev1">&gt; ldl -lnsl -lutil -Wl,-rpath -Wl,/opt/openmpi/lib
</span><br>
<span class="quotelev1">&gt; /opt/intel/cce/10.0.023/lib/libimf.so: warning: warning:  
</span><br>
<span class="quotelev1">&gt; feupdateenv is not implemented and will always fail
</span><br>
<span class="quotelev1">&gt; /usr/lib64/crt1.o: In function `_start':
</span><br>
<span class="quotelev1">&gt; (.text+0x20): undefined reference to `main'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [opal_wrapper] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal/ 
</span><br>
<span class="quotelev1">&gt; tools/wrappers'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/davegp/Desktop/openmpi-1.2.3/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3678.php">Isaac Huang: "[OMPI users] end-to-end data reliability"</a>
<li><strong>Previous message:</strong> <a href="3676.php">Robert Latham: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>In reply to:</strong> <a href="3674.php">David Prendergast: "[OMPI users] Problem compiling openmpi-1.2.3 on Core 2 Duo with icc"</a>
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
