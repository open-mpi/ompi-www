<?
$subject_val = "Re: [OMPI users] Compile problems with xlf and xlc on power";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 12:47:36 2009" -->
<!-- isoreceived="20090113174736" -->
<!-- sent="Tue, 13 Jan 2009 12:47:27 -0500" -->
<!-- isosent="20090113174727" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compile problems with xlf and xlc on power" -->
<!-- id="37D49566-AFFC-4611-B401-FF4A80E58634_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="496CD2D3.6050003_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compile problems with xlf and xlc on power<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 12:47:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7691.php">Bill Buros: "Re: [OMPI users] Compile problems with xlf and xlc on power"</a>
<li><strong>Previous message:</strong> <a href="7689.php">Bill Buros: "Re: [OMPI users] Compile problems with xlf and xlc on power"</a>
<li><strong>In reply to:</strong> <a href="7689.php">Bill Buros: "Re: [OMPI users] Compile problems with xlf and xlc on power"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7691.php">Bill Buros: "Re: [OMPI users] Compile problems with xlf and xlc on power"</a>
<li><strong>Reply:</strong> <a href="7691.php">Bill Buros: "Re: [OMPI users] Compile problems with xlf and xlc on power"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 13, 2009, at 12:43 PM, Bill Buros wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I don't know if anyone has tried the xlf compilers in a long time;  
</span><br>
<span class="quotelev2">&gt;&gt; it's probably unsurprising that they don't work.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; nah..   we use it all of the time..
</span><br>
<p>Cool.  Do you use it with the f90 bindings / does it work?  If so, any  
<br>
idea what Rene's problem could be?
<br>
<p>And does IBM want to list the xl compilers as officially supported?   
<br>
Right now, they're not on the list...
<br>
<p><span class="quotelev1">&gt; an example is here..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.ibm.com/developerworks/wikis/display/hpccentral/An+example+of+using+OpenMPI+with+SPECmpi2007">http://www.ibm.com/developerworks/wikis/display/hpccentral/An+example+of+using+OpenMPI+with+SPECmpi2007</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, if you can handle not having the Fortran 90 bindings, you  
</span><br>
<span class="quotelev2">&gt;&gt; might be able to eek by with the --disable-mpi-f90 option to  
</span><br>
<span class="quotelev2">&gt;&gt; configure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 13, 2009, at 12:03 AM, Salmon, Rene wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to compile openmpi-1.2.8 on an IBM Power6 box using  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the xlc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and xlf compilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is my configure line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure CC=xlc_r CXX=xlc++_r F77=xlf_r FC=xlf90_r --disable- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-static
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I type make the build stops with the following error.  Anyone  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any ideas as to what the problem might be?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /ompi/include -DOMPI_PROFILE_LAYER=0 -DOMPI_COMPILING_F77_WRAPPERS=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I../../..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; G -c test_constants_f.c -o test_constants_f.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh ../../../libtool --tag=CC   --mode=link xlc_r  -O -DNDEBUG
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -export-dy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ase.la  attr_fn_f.lo f90_accessors.lo strings.lo test_constants_f.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lnsl  -lu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: link: ar cru .libs/libmpi_f77_base.a  attr_fn_f.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f90_accessors.o strin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: link: ranlib .libs/libmpi_f77_base.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: link: creating libmpi_f77_base.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libmpi_f77_base.la&quot; &amp;&amp; ln -s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;../libmpi_f7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base.la&quot; )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[4]: Leaving directory `/data1/salmr0/openmpi-1.2.8/ompi/mpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f77'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Leaving directory `/data1/salmr0/openmpi-1.2.8/ompi/mpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f77'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in f90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Entering directory `/data1/salmr0/openmpi-1.2.8/ompi/mpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f90'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./scripts/mpi-f90-interfaces.h.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /data1/salmr0/openmpi-1.2.8/ompi/mpi/f90 &gt; mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make  all-recursive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[4]: Entering directory `/data1/salmr0/openmpi-1.2.8/ompi/mpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f90'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in scripts
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[5]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/data1/salmr0/openmpi-1.2.8/ompi/mpi/f90/scripts'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[5]: Nothing to be done for `all'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[5]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/data1/salmr0/openmpi-1.2.8/ompi/mpi/f90/scripts'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[5]: Entering directory `/data1/salmr0/openmpi-1.2.8/ompi/mpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f90'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh ../../../libtool   --mode=compile xlf90_r
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I../../../ompi/include -I../.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I. -I../../../ompi/mpi/f90   -c -o mpi.lo mpi.f90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: compile:  xlf90_r -I../../../ompi/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I../../../ompi/include -I. -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f90 -c mpi.f90 -o mpi.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;./mpi-f90-interfaces.h&quot;, line 264.1: 1514-170 (W) The dummy  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;function&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the EXTERNAL attribute. It is unknown whether the argument is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SUBROUTINE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ument may not be used to determine the uniqueness of this procedure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;./mpi-f90-interfaces.h&quot;, line 275.1: 1514-170 (W) The dummy  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;comm_copy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ared only with the EXTERNAL attribute. It is unknown whether the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument is a S
</span><br>
<span class="quotelev3">&gt;&gt;&gt; . The argument may not be used to determine the uniqueness of this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; procedure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;./mpi-f90-interfaces.h&quot;, line 493.1: 1514-170 (W) The dummy  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;function&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the EXTERNAL attribute. It is unknown whether the argument is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SUBROUTINE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ument may not be used to determine the uniqueness of this procedure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;./mpi-f90-interfaces.h&quot;, line 580.1: 1514-170 (W) The dummy  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;function&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the EXTERNAL attribute. It is unknown whether the argument is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SUBROUTINE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ument may not be used to determine the uniqueness of this procedure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;./mpi-f90-interfaces.h&quot;, line 1020.1: 1514-170 (W) The dummy  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;query_fn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; y with the EXTERNAL attribute. It is unknown whether the argument  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SUBROUTIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gument may not be used to determine the uniqueness of this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; procedure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;./mpi-f90-interfaces.h&quot;, line 1371.1: 1514-170 (W) The dummy  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;copy_fn&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the EXTERNAL attribute. It is unknown whether the argument is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SUBROUTINE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ument may not be used to determine the uniqueness of this procedure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;./mpi-f90-interfaces.h&quot;, line 1394.1: 1514-170 (W) The dummy  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; y with the EXTERNAL attribute. It is unknown whether the argument  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SUBROUTIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gument may not be used to determine the uniqueness of this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; procedure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;./mpi-f90-interfaces.h&quot;, line 1477.1: 1514-170 (W) The dummy  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;read_con
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clared only with the EXTERNAL attribute. It is unknown whether the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ON. The argument may not be used to determine the uniqueness of this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; procedure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;./mpi-f90-interfaces.h&quot;, line 1543.1: 1514-699 (S) Procedure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpi_sizeof0di4&quot; m
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dummy argument that corresponds by position in the argument list  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dummy argu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cedure &quot;mpi_sizeof0dl&quot;, present and type incompatible, present with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different ki
</span><br>
<span class="quotelev3">&gt;&gt;&gt; present with a different rank.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;./mpi-f90-interfaces.h&quot;, line 1627.1: 1514-699 (S) Procedure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpi_sizeof1di4&quot; m
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dummy argument that corresponds by position in the argument list  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dummy argu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cedure &quot;mpi_sizeof1dl&quot;, present and type incompatible, present with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different ki
</span><br>
<span class="quotelev3">&gt;&gt;&gt; present with a different rank.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;./mpi-f90-interfaces.h&quot;, line 1711.1: 1514-699 (S) Procedure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpi_sizeof2di4&quot; m
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dummy argument that corresponds by position in the argument list  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dummy argu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cedure &quot;mpi_sizeof2dl&quot;, present and type incompatible, present with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different ki
</span><br>
<span class="quotelev3">&gt;&gt;&gt; present with a different rank.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;./mpi-f90-interfaces.h&quot;, line 1795.1: 1514-699 (S) Procedure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpi_sizeof3di4&quot; m
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dummy argument that corresponds by position in the argument list  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dummy argu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cedure &quot;mpi_sizeof3dl&quot;, present and type incompatible, present with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different ki
</span><br>
<span class="quotelev3">&gt;&gt;&gt; present with a different rank.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;./mpi-f90-interfaces.h&quot;, line 1879.1: 1514-699 (S) Procedure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;mpi_sizeof4di4&quot; m
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dummy argument that corresponds by position in the argument list  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dummy argu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cedure &quot;mpi_sizeof4dl&quot;, present and type incompatible, present with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different ki
</span><br>
<span class="quotelev3">&gt;&gt;&gt; present with a different rank.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;./mpi-f90-interfaces.h&quot;, line 2213.1: 1514-170 (W) The dummy  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;type_cop
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lared only with the EXTERNAL attribute. It is unknown whether the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; N. The argument may not be used to determine the uniqueness of this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; procedure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;./mpi-f90-interfaces.h&quot;, line 2652.1: 1514-170 (W) The dummy  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; y with the EXTERNAL attribute. It is unknown whether the argument  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SUBROUTIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gument may not be used to determine the uniqueness of this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; procedure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;./mpi-f90-interfaces.h&quot;, line 2663.1: 1514-170 (W) The dummy  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;win_copy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ared only with the EXTERNAL attribute. It is unknown whether the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argument is a S
</span><br>
<span class="quotelev3">&gt;&gt;&gt; . The argument may not be used to determine the uniqueness of this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; procedure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** mpi   === End of Compilation 1 ===
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1501-511  Compilation failed for file mpi.f90.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[5]: *** [mpi.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[5]: Leaving directory `/data1/salmr0/openmpi-1.2.8/ompi/mpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f90'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[4]: Leaving directory `/data1/salmr0/openmpi-1.2.8/ompi/mpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f90'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Leaving directory `/data1/salmr0/openmpi-1.2.8/ompi/mpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f90'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/data1/salmr0/openmpi-1.2.8/ompi/mpi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory `/data1/salmr0/openmpi-1.2.8/ompi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rene
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="7691.php">Bill Buros: "Re: [OMPI users] Compile problems with xlf and xlc on power"</a>
<li><strong>Previous message:</strong> <a href="7689.php">Bill Buros: "Re: [OMPI users] Compile problems with xlf and xlc on power"</a>
<li><strong>In reply to:</strong> <a href="7689.php">Bill Buros: "Re: [OMPI users] Compile problems with xlf and xlc on power"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7691.php">Bill Buros: "Re: [OMPI users] Compile problems with xlf and xlc on power"</a>
<li><strong>Reply:</strong> <a href="7691.php">Bill Buros: "Re: [OMPI users] Compile problems with xlf and xlc on power"</a>
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
