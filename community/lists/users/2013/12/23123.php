<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  2 20:06:21 2013" -->
<!-- isoreceived="20131203010621" -->
<!-- sent="Tue, 3 Dec 2013 01:06:05 +0000" -->
<!-- isosent="20131203010605" -->
<!-- name="Teranishi, Keita" -->
<!-- email="knteran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?" -->
<!-- id="CEC26E69.4684D%knteran_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20131202222848.GD12354_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?<br>
<strong>From:</strong> Teranishi, Keita (<em>knteran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-02 20:06:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23124.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23122.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with	--enable-thread-multiple"</a>
<li><strong>In reply to:</strong> <a href="23121.php">Nathan Hjelm: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23124.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>It is working!
<br>
<p>Thanks,
<br>
---------------------------------------------------------------------------
<br>
<pre>
--
Keita Teranishi
Principal Member of Technical Staff
Scalable Modeling and Analysis Systems
Sandia National Laboratories
Livermore, CA 94551
+1 (925) 294-3738
On 12/2/13 2:28 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
&gt;Ack, forgot about that. There is a bug in 1.7.3 that breaks one of LANL's
&gt;default
&gt;settings. Just change the line in
&gt;contrib/platform/lanl/cray_xe6/optimized-common
&gt;
&gt;from:
&gt;
&gt;enable_orte_static_ports=no
&gt;
&gt;to:
&gt;
&gt;enable_orte_static_ports=yes
&gt;
&gt;
&gt;That should work.
&gt;
&gt;-Nathan
&gt;
&gt;On Wed, Nov 27, 2013 at 08:05:48PM +0000, Teranishi, Keita wrote:
&gt;&gt; Nathan,
&gt;&gt; 
&gt;&gt; I got a compile-time error (see below).  I use a script from
&gt;&gt; contrib/platform/lanl/cray_xe6 with gcc-4.7.2.  Is there any problem in
&gt;&gt;my
&gt;&gt; environment?
&gt;&gt; 
&gt;&gt; Thanks,
&gt;&gt; Keita 
&gt;&gt; 
&gt;&gt; CC       oob_tcp.lo
&gt;&gt; oob_tcp.c:353:7: error: expected identifier or '(' before 'else'
&gt;&gt; oob_tcp.c:358:5: warning: data definition has no type or storage class
&gt;&gt; [enabled by default]
&gt;&gt; oob_tcp.c:358:5: warning: type defaults to 'int' in declaration of
&gt;&gt; 'mca_oob_tcp_ipv4_dynamic_ports' [enabled by default]
&gt;&gt; oob_tcp.c:358:5: error: conflicting types for
&gt;&gt; 'mca_oob_tcp_ipv4_dynamic_ports'
&gt;&gt; oob_tcp.c:140:14: note: previous definition of
&gt;&gt; 'mca_oob_tcp_ipv4_dynamic_ports' was here
&gt;&gt; oob_tcp.c:358:38: warning: initialization makes integer from pointer
&gt;&gt; without a cast [enabled by default]
&gt;&gt; oob_tcp.c:359:6: error: expected identifier or '(' before 'void'
&gt;&gt; oob_tcp.c:367:5: error: expected identifier or '(' before 'if'
&gt;&gt; oob_tcp.c:380:7: error: expected identifier or '(' before 'else'
&gt;&gt; oob_tcp.c:384:26: error: expected '=', ',', ';', 'asm' or
&gt;&gt;'__attribute__'
&gt;&gt; before '.' token
&gt;&gt; oob_tcp.c:385:30: error: expected declaration specifiers or '...' before
&gt;&gt; string constant
&gt;&gt; oob_tcp.c:385:48: error: expected declaration specifiers or '...' before
&gt;&gt; 'disable_family_values'
&gt;&gt; oob_tcp.c:385:71: error: expected declaration specifiers or '...' before
&gt;&gt; '&amp;' token
&gt;&gt; oob_tcp.c:386:6: error: expected identifier or '(' before 'void'
&gt;&gt; oob_tcp.c:391:5: error: expected identifier or '(' before 'do'
&gt;&gt; oob_tcp.c:391:5: error: expected identifier or '(' before 'while'
&gt;&gt; oob_tcp.c:448:5: error: expected identifier or '(' before 'return'
&gt;&gt; oob_tcp.c:449:1: error: expected identifier or '(' before '}' token
&gt;&gt; make[2]: *** [oob_tcp.lo] Error 1
&gt;&gt; make[2]: Leaving directory
&gt;&gt; `/ufs/home/knteran/openmpi-1.7.3/orte/mca/oob/tcp'
&gt;&gt; make[1]: *** [all-recursive] Error 1
&gt;&gt; make[1]: Leaving directory `/ufs/home/knteran/openmpi-1.7.3/orte'
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; On 11/26/13 3:54 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
&gt;&gt; 
&gt;&gt; &gt;Alright, everything is identical to Cielito but it looks like you are
&gt;&gt; &gt;getting
&gt;&gt; &gt;bad data from alps.
&gt;&gt; &gt;
&gt;&gt; &gt;I think we changed some of the alps parsing for 1.7.3. Can you give
&gt;&gt;that
&gt;&gt; &gt;version a try and let me know if it resolves your issue. If not I can
&gt;&gt;add
&gt;&gt; &gt;better debugging to the ras/alps module.
&gt;&gt; &gt;
&gt;&gt; &gt;-Nathan
&gt;&gt; &gt;
&gt;&gt; &gt;On Tue, Nov 26, 2013 at 11:50:00PM +0000, Teranishi, Keita wrote:
&gt;&gt; &gt;&gt; Here is what we can see:
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; knteran_at_mzlogin01e:~&gt; ls -l /opt/cray/xe-sysroot
&gt;&gt; &gt;&gt; total 8
&gt;&gt; &gt;&gt; drwxr-xr-x 6 bin  bin  4096 2012-02-04 11:05
&gt;&gt; &gt;&gt;4.0.36.securitypatch.20111221
&gt;&gt; &gt;&gt; drwxr-xr-x 6 bin  bin  4096 2013-01-11 15:17 4.1.40
&gt;&gt; &gt;&gt; lrwxrwxrwx 1 root root    6 2013-01-11 15:19 default -&gt; 4.1.40
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; Thanks,
&gt;&gt; &gt;&gt; Keita
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; On 11/26/13 3:19 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;??? Alps reports that the two nodes each have one slot. What PE
&gt;&gt;release
&gt;&gt; &gt;&gt; &gt;are you using. A quick way to find out is ls -l
&gt;&gt;/opt/cray/xe-sysroot on
&gt;&gt; &gt;&gt; &gt;the
&gt;&gt; &gt;&gt; &gt;external login node (this directory does not exist on the internal
&gt;&gt; &gt;&gt;login
&gt;&gt; &gt;&gt; &gt;nodes.)
&gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;-Nathan
&gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;On Tue, Nov 26, 2013 at 11:07:36PM +0000, Teranishi, Keita wrote:
&gt;&gt; &gt;&gt; &gt;&gt; Nathan,
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; Here it is.
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; Keita
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; On 11/26/13 3:02 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;Ok, that sheds a little more light on the situation. For some
&gt;&gt; &gt;&gt;reason it
&gt;&gt; &gt;&gt; &gt;&gt; &gt;sees 2 nodes
&gt;&gt; &gt;&gt; &gt;&gt; &gt;apparently with one slot each. One more set out outputs would be
&gt;&gt; &gt;&gt; &gt;&gt;helpful.
&gt;&gt; &gt;&gt; &gt;&gt; &gt;Please run
&gt;&gt; &gt;&gt; &gt;&gt; &gt;with -mca ras_base_verbose 100 . That way I can see what was read
&gt;&gt; &gt;&gt;from
&gt;&gt; &gt;&gt; &gt;&gt; &gt;alps.
&gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;-Nathan
&gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;On Tue, Nov 26, 2013 at 10:14:11PM +0000, Teranishi, Keita wrote:
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Nathan,
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; I am hoping these files would help you.
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Thanks,
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Keita
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; On 11/26/13 1:41 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;Well, no hints as to the error there. Looks identical to the
&gt;&gt; &gt;&gt;output
&gt;&gt; &gt;&gt; &gt;&gt;on
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;my
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;XE-6. How
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;about setting -mca rmaps_base_verbose 100 . See what is going
&gt;&gt;on
&gt;&gt; &gt;&gt; &gt;&gt;with
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;the
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;mapper.
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;-Nathan Hjelm
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;Application Readiness, HPC-5, LANL
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;On Tue, Nov 26, 2013 at 09:33:20PM +0000, Teranishi, Keita
&gt;&gt;wrote:
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Nathan,
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Please see the attached obtained from two cases (-np 2 and
&gt;&gt;-np
&gt;&gt; &gt;&gt;4).
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Thanks,
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;-----------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; --
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Keita Teranishi
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Principal Member of Technical Staff
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Scalable Modeling and Analysis Systems
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Sandia National Laboratories
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Livermore, CA 94551
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; +1 (925) 294-3738
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; On 11/26/13 1:26 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;Seems like something is going wrong with processor binding.
&gt;&gt; &gt;&gt;Can
&gt;&gt; &gt;&gt; &gt;&gt;you
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;run
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;with
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;-mca plm_base_verbose 100 . Might shed some light on why it
&gt;&gt; &gt;&gt; &gt;&gt;thinks
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;there
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;are
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;not enough slots.
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;-Nathan Hjelm
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;Application Readiness, HPC-5, LANL
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;On Tue, Nov 26, 2013 at 09:18:14PM +0000, Teranishi, Keita
&gt;&gt; &gt;&gt;wrote:
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Nathan,
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Now I remove strip_prefix stuff, which was applied to the
&gt;&gt; &gt;&gt;other
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;versions
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; of OpenMPI.
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; I still have the same problem with msubrun command.
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; knteran_at_mzlogin01:~&gt; msub -lnodes=2:ppn=16 -I
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; qsub: waiting for job 7754058.sdb to start
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; qsub: job 7754058.sdb ready
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; knteran_at_mzlogin01:~&gt; cd test-openmpi/
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; knteran_at_mzlogin01:~/test-openmpi&gt; !mp
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; mpicc cpi.c -o cpi
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; knteran_at_mzlogin01:~/test-openmpi&gt; mpirun -np 4 ./cpi
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;---------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;-
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; There are not enough slots available in the system to
&gt;&gt; &gt;&gt;satisfy
&gt;&gt; &gt;&gt; &gt;&gt;the
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;4
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;slots
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; that were requested by the application:
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;   ./cpi
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Either request fewer slots for your application, or make
&gt;&gt; &gt;&gt;more
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;slots
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; available
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; for use.
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;---------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;-
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; I set PATH and LD_LIBRARY_PATH to match with my own
&gt;&gt;OpenMPI
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;installation.
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; knteran_at_mzlogin01:~/test-openmpi&gt; which mpirun
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; /home/knteran/openmpi/bin/mpirun
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Thanks,
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;---------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; --
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Keita Teranishi
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Principal Member of Technical Staff
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Scalable Modeling and Analysis Systems
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Sandia National Laboratories
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Livermore, CA 94551
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; +1 (925) 294-3738
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; On 11/26/13 12:52 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt;
&gt;&gt; &gt;&gt;wrote:
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;Weird. That is the same configuration we have deployed
&gt;&gt;on
&gt;&gt; &gt;&gt; &gt;&gt;Cielito
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;and
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;Cielo. Does
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;it work under an msub allocation?
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;BTW, with that configuration you should not set
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;plm_base_strip_prefix_from_node_names
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;to 0. That will confuse orte since the node hostname
&gt;&gt;will
&gt;&gt; &gt;&gt;not
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;match
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;what
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;was
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;supplied by alps.
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;-Nathan
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;On Tue, Nov 26, 2013 at 08:38:51PM +0000, Teranishi,
&gt;&gt;Keita
&gt;&gt; &gt;&gt; &gt;&gt;wrote:
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Nathan,
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; (Please forget about the segfault. It was my mistake).
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; I use OpenMPI-1.7.2 (build with gcc-4.7.2) to run the
&gt;&gt; &gt;&gt; &gt;&gt;program.
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; I
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;used
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; contrib/platform/lanl/cray_xe6/optimized_lustre and
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; --enable-mpirun-prefix-by-default for configuration.
&gt;&gt;As
&gt;&gt; &gt;&gt;I
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;said,
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;it
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;works
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; fine with aprun, but fails with mpirun/mpiexec.
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; knteran_at_mzlogin01:~/test-openmpi&gt; ~/openmpi/bin/mpirun
&gt;&gt; &gt;&gt;-np 4
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;./a.out
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;-------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;-
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; There are not enough slots available in the system to
&gt;&gt; &gt;&gt; &gt;&gt;satisfy
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;the
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;4
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;slots
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; that were requested by the application:
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;   ./a.out
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Either request fewer slots for your application, or
&gt;&gt;make
&gt;&gt; &gt;&gt; &gt;&gt;more
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;slots
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; available
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; for use.
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;-------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; -
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Thanks,
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;-------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; --
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Keita Teranishi
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Principal Member of Technical Staff
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Scalable Modeling and Analysis Systems
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Sandia National Laboratories
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Livermore, CA 94551
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; +1 (925) 294-3738
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; On 11/25/13 12:55 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt;
&gt;&gt; &gt;&gt; &gt;&gt;wrote:
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;Ok, that should have worked. I just double-checked it
&gt;&gt; &gt;&gt;to me
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;sure.
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;ct-login1:/lscratch1/hjelmn/ibm/collective hjelmn$
&gt;&gt; &gt;&gt;mpirun
&gt;&gt; &gt;&gt; &gt;&gt;-np
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;32
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;./bcast
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;App launch reported: 17 (out of 3) daemons - 0 (out
&gt;&gt;of
&gt;&gt; &gt;&gt;32)
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;procs
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;ct-login1:/lscratch1/hjelmn/ibm/collective hjelmn$
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;How did you configure Open MPI and what version are
&gt;&gt;you
&gt;&gt; &gt;&gt; &gt;&gt;using?
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;-Nathan
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;On Mon, Nov 25, 2013 at 08:48:09PM +0000, Teranishi,
&gt;&gt; &gt;&gt;Keita
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;wrote:
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Hi Natan,
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; I tried qsub option you
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; mpirun -np 4  --mca
&gt;&gt; &gt;&gt; &gt;&gt;plm_base_strip_prefix_from_node_names= 0
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;./cpi
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;-----------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;-
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; There are not enough slots available in the system
&gt;&gt;to
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;satisfy
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;the
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;4
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;slots
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; that were requested by the application:
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;   ./cpi
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Either request fewer slots for your application, or
&gt;&gt; &gt;&gt;make
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;more
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;slots
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; available
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; for use.
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;-----------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;-
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Here is I got from aprun
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; aprun  -n 32 ./cpi
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Process 8 of 32 is on nid00011
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Process 5 of 32 is on nid00011
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Process 12 of 32 is on nid00011
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Process 9 of 32 is on nid00011
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Process 11 of 32 is on nid00011
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Process 13 of 32 is on nid00011
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Process 0 of 32 is on nid00011
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Process 6 of 32 is on nid00011
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Process 3 of 32 is on nid00011
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; :
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; :
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Also, I found a strange error in the end of the
&gt;&gt; &gt;&gt;program
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;(MPI_Finalize?)
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Can you tell me what is wrong with that?
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [nid00010:23511] [ 0]
&gt;&gt;/lib64/libpthread.so.0(+0xf7c0)
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;[0x2aaaacbbb7c0]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [nid00010:23511] [ 1]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;/home/knteran/openmpi/lib/libmpi.so.0(opal_memory_ptmalloc2
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;_i
&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;nt
&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;_f
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;re
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;e+
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;0x
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;57
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;)
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [0x2aaaaaf38ec7]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [nid00010:23511] [ 2]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;/home/knteran/openmpi/lib/libmpi.so.0(opal_memory_ptmalloc2_fre
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;e+
&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;0x
&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;c3
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;)
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [0x2aaaaaf3b6c3]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [nid00010:23511] [ 3]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;/home/knteran/openmpi/lib/libmpi.so.0(mca_pml_base_close+0xb2)
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [0x2aaaaae717b2]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [nid00010:23511] [ 4]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;/home/knteran/openmpi/lib/libmpi.so.0(ompi_mpi_finalize+0x333)
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [0x2aaaaad7be23]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [nid00010:23511] [ 5] ./cpi() [0x400e23]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [nid00010:23511] [ 6]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;/lib64/libc.so.6(__libc_start_main+0xe6)
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [0x2aaaacde7c36]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [nid00010:23511] [ 7] ./cpi() [0x400b09]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Thanks,
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;-----------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; --
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Keita Teranishi
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Principal Member of Technical Staff
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Scalable Modeling and Analysis Systems
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Sandia National Laboratories
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Livermore, CA 94551
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; +1 (925) 294-3738
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; On 11/25/13 12:28 PM, &quot;Nathan Hjelm&quot;
&gt;&gt;&lt;hjelmn_at_[hidden]&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;wrote:
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;Just talked with our local Cray rep. Sounds like
&gt;&gt;that
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;torque
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;syntax
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;is
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;broken. You can continue
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;to use qsub (though qsub use is strongly
&gt;&gt; &gt;&gt;discouraged) if
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;you
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;use
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;the
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;msub
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;options.
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;Ex:
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;qsub -lnodes=2:ppn=16
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;Works.
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;-Nathan
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;On Mon, Nov 25, 2013 at 01:11:29PM -0700, Nathan
&gt;&gt; &gt;&gt;Hjelm
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;wrote:
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Hmm, this seems like either a bug in qsub
&gt;&gt;(torque
&gt;&gt; &gt;&gt;is
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;full of
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;serious
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;bugs) or a bug
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; in alps. I got an allocation using that command
&gt;&gt;and
&gt;&gt; &gt;&gt; &gt;&gt;alps
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;only
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;sees 1
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;node:
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt; &gt;&gt;Trying
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;ALPS
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;configuration file: &quot;/etc/sysconfig/alps&quot;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;parser_ini
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt; &gt;&gt;Trying
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;ALPS
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;configuration file: &quot;/etc/alps.conf&quot;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;parser_separated_columns
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt; &gt;&gt;Located
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;ALPS
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;scheduler
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;file: &quot;/ufs/alps_shared/appinfo&quot;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;ras:alps:orte_ras_alps_get_appinfo_attempts: 10
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;begin
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;processing
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;appinfo file
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;file
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;/ufs/alps_shared/appinfo read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010]
&gt;&gt;ras:alps:allocate: 47
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;entries
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;in
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;file
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3492 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3492 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3541 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3541 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3560 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3560 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3561 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3561 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3566 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3566 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3573 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3573 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3588 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3588 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3598 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3598 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3599 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3599 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3622 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3622 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3635 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3635 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3640 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3640 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3641 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3641 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3642 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3642 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3647 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3647 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3651 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3651 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3653 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3653 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3659 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3659 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3662 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3662 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3665 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3665 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt;read
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;data
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;for
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;resId
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;3668 - myId 3668
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;ras:alps:read_appinfo(modern):
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;processing
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;NID 29 with 16 slots
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] ras:alps:allocate:
&gt;&gt; &gt;&gt; &gt;&gt;success
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] [[15798,0],0]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;ras:base:node_insert
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;inserting 1 nodes
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; [ct-login1.localdomain:06010] [[15798,0],0]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;ras:base:node_insert
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;node 29
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; ======================   ALLOCATED NODES
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;======================
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;  Data for node: 29	Num slots: 16	Max slots: 0
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;=================================================================
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Torque also shows only one node with 16 PPN:
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; $ env | grep PBS
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; ...
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; PBS_NUM_PPN=16
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; $ cat /var/spool/torque/aux//915289.sdb
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; login1
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Which is wrong! I will have to ask Cray what is
&gt;&gt; &gt;&gt;going
&gt;&gt; &gt;&gt; &gt;&gt;on
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;here.
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;I
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;recommend you switch to
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; msub to get an allocation. Moab has fewer bugs.
&gt;&gt;I
&gt;&gt; &gt;&gt; &gt;&gt;can't
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;even
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;get
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;aprun
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;to work:
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; $ aprun -n 2 -N 1 hostname
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; apsched: claim exceeds reservation's node-count
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; $ aprun -n 32 hostname
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; apsched: claim exceeds reservation's node-count
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; To get an interactive session 2 nodes with 16
&gt;&gt;ppn
&gt;&gt; &gt;&gt;on
&gt;&gt; &gt;&gt; &gt;&gt;each
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;run:
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; msub -I -lnodes=2:ppn=16
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; Open MPI should then work correctly.
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; -Nathan Hjelm
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; HPC-5, LANL
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; On Sat, Nov 23, 2013 at 10:13:26PM +0000,
&gt;&gt; &gt;&gt;Teranishi,
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;Keita
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;wrote:
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    Hi,
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    I installed OpenMPI on our small XE6 using
&gt;&gt;the
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;configure
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;options
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;under
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    /contrib directory.  It appears it is
&gt;&gt;working
&gt;&gt; &gt;&gt; &gt;&gt;fine,
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;but it
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;ignores
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;MCA
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    parameters (set in env var).  So I
&gt;&gt;switched to
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;mpirun
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;(in
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;OpenMPI)
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;and it
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    can handle MCA parameters somehow.
&gt;&gt;However,
&gt;&gt; &gt;&gt; &gt;&gt;mpirun
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;fails to
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;allocate
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    process by cores.  For example, I
&gt;&gt;allocated 32
&gt;&gt; &gt;&gt; &gt;&gt;cores
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;(on 2
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;nodes)
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;by &quot;qsub
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    -lmppwidth=32 -lmppnppn=16&quot;, mpirun
&gt;&gt; &gt;&gt;recognizes it
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;as 2
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;slots.
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;Is it
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    possible to mpirun to handle mluticore
&gt;&gt;nodes
&gt;&gt; &gt;&gt;of
&gt;&gt; &gt;&gt; &gt;&gt;XE6
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;properly
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;or
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;is
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;there
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    any options to handle MCA parameters for
&gt;&gt; &gt;&gt;aprun?
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    Regards,
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; 
&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;---------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;&gt;&gt;--
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;----
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    Keita Teranishi
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    Principal Member of Technical Staff
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    Scalable Modeling and Analysis Systems
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    Sandia National Laboratories
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    Livermore, CA 94551
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;    +1 (925) 294-3738
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt; 
&gt;&gt;_______________________________________________
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt; users mailing list
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt; users_at_[hidden]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; _______________________________________________
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; users mailing list
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; users_at_[hidden]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; _______________________________________________
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; users mailing list
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; users_at_[hidden]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; _______________________________________________
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; users mailing list
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; users_at_[hidden]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; _______________________________________________
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; users mailing list
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; users_at_[hidden]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; _______________________________________________
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; users mailing list
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; users_at_[hidden]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; _______________________________________________
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; users mailing list
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; users_at_[hidden]
&gt;&gt; &gt;&gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; &gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; &gt;&gt; _______________________________________________
&gt;&gt; &gt;&gt; &gt;&gt; users mailing list
&gt;&gt; &gt;&gt; &gt;&gt; users_at_[hidden]
&gt;&gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; &gt;&gt; &gt;
&gt;&gt; &gt;&gt; 
&gt;&gt; &gt;&gt; _______________________________________________
&gt;&gt; &gt;&gt; users mailing list
&gt;&gt; &gt;&gt; users_at_[hidden]
&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23124.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23122.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with	--enable-thread-multiple"</a>
<li><strong>In reply to:</strong> <a href="23121.php">Nathan Hjelm: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23124.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
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
