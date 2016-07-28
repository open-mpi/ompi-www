<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 25 07:51:27 2007" -->
<!-- isoreceived="20070725115127" -->
<!-- sent="Wed, 25 Jul 2007 07:50:24 -0400" -->
<!-- isosent="20070725115024" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi support ignored" -->
<!-- id="266833F7-659F-419F-8F87-A197CE8EA831_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="627863.41785.qm_at_web57602.mail.re1.yahoo.com" -->
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
<strong>Date:</strong> 2007-07-25 07:50:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3759.php">Jeff Squyres: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<li><strong>Previous message:</strong> <a href="3757.php">Biagio Cosenza: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<li><strong>In reply to:</strong> <a href="3754.php">Francesco Pietra: "Re: [OMPI users] openmpi support ignored"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3762.php">Andrey Kaliazin: "Re: [OMPI users] openmpi support ignored"</a>
<li><strong>Reply:</strong> <a href="3762.php">Andrey Kaliazin: "Re: [OMPI users] openmpi support ignored"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I see that &quot;ifort&quot; is being used to build Amber (instead of  
<br>
using mpif77 or mpif90), and I don't see any reference to the MPI  
<br>
libraries in the final link line to create the &quot;sander.MPI&quot;  
<br>
executable, which is probably why it says it can't find all those  
<br>
symbols.
<br>
<p>We strongly recommend that all applications use the Open MPI wrapper  
<br>
compilers to build themselves; they'll then automatically get all the  
<br>
proper header files and libraries.
<br>
<p>Unfortunately, being unfamiliar with Amber, I can't really help much  
<br>
further.  :-(
<br>
<p><p>On Jul 24, 2007, at 3:17 PM, Francesco Pietra wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff:
</span><br>
<span class="quotelev1">&gt; The application mailing list was the first I tried. So far the  
</span><br>
<span class="quotelev1">&gt; difficulty to
</span><br>
<span class="quotelev1">&gt; let amber know about openmpi remains, however. Therefore, with the  
</span><br>
<span class="quotelev1">&gt; serial
</span><br>
<span class="quotelev1">&gt; installation I am at a fraction of the possibilities of my machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder whether by providing here the way openmpi was compiled and
</span><br>
<span class="quotelev1">&gt; (attachments) the config.h used to try to compile the application and
</span><br>
<span class="quotelev1">&gt; errors.log, forced to be generated during the compilation, may  
</span><br>
<span class="quotelev1">&gt; reveal a
</span><br>
<span class="quotelev1">&gt; solution to openmpi experts, ie how to set ./config for the  
</span><br>
<span class="quotelev1">&gt; application. It
</span><br>
<span class="quotelev1">&gt; seems to me that the application does not find the mpi libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.3 was compiled on Debian Linux amd64 etch with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure CC=/opt/intel/cce/9.1.042/bin/icc
</span><br>
<span class="quotelev1">&gt; CXX=/opt/intel/cce/9.1.042/bin/icpc F77=/opt/intel/fce/9.1.036/bin/ 
</span><br>
<span class="quotelev1">&gt; ifort
</span><br>
<span class="quotelev1">&gt; FC=/opt/intel/fce/9.1.036/bin/ifort --with-libnuma=/usr/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info |grep libnuma
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info |grep maffinity
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Amber9 parallel compilation was attempted on the same machine by  
</span><br>
<span class="quotelev1">&gt; first letting
</span><br>
<span class="quotelev1">&gt; it know about openmpi, as indicated in their manual:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export MPI_HOME=/usr/local/openmpi-1.2.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make clean
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure -openmpi ifort_x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (must say that I did not find on the configure help a flag for the  
</span><br>
<span class="quotelev1">&gt; intel C
</span><br>
<span class="quotelev1">&gt; compiler, though probably this is not the issue; the application is  
</span><br>
<span class="quotelev1">&gt; set to use
</span><br>
<span class="quotelev1">&gt; gcc)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make parallel &gt;&amp; errors.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both errors.log and config.h (renamed config.hREN because .h does  
</span><br>
<span class="quotelev1">&gt; not result in
</span><br>
<span class="quotelev1">&gt; a true attachment with gnome)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All that under the hypothesis that a possible solution may be seen  
</span><br>
<span class="quotelev1">&gt; on the fly;
</span><br>
<span class="quotelev1">&gt; I can't expect that the problem is studied on the openmpi site.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; francesco pietra
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 23, 2007, at 5:11 PM, Bert Wesarg wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm not sure what these command line switches do...?  &quot;-openmpi&quot; is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not a switch that our configure supports.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No, he tries to configure the application &quot;Amber9&quot;, so this is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open  MPI configure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ah, I mis-read this completely.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm unfortunately totally unfamiliar with Amber9 -- do they have a
</span><br>
<span class="quotelev2">&gt;&gt; support mailing list where you can ask this question?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________________________________________________ 
</span><br>
<span class="quotelev1">&gt; ______________
</span><br>
<span class="quotelev1">&gt; Get the Yahoo! toolbar and be alerted to new email wherever you're  
</span><br>
<span class="quotelev1">&gt; surfing.
</span><br>
<span class="quotelev1">&gt; <a href="http://new.toolbar.yahoo.com/toolbar/features/mail/index.php">http://new.toolbar.yahoo.com/toolbar/features/mail/index.php</a>
</span><br>
<span class="quotelev1">&gt; &lt;config.hREN&gt;
</span><br>
<span class="quotelev1">&gt; Starting installation of Amber9 (parallel) at Tue Jul 24 08:05:36  
</span><br>
<span class="quotelev1">&gt; CEST 2007.
</span><br>
<span class="quotelev1">&gt; cd sander; make parallel
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory `/usr/local/amber9/src/sander'
</span><br>
<span class="quotelev1">&gt; ./checkparconf
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; evb_vars.f &gt; _evb_vars.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o evb_vars.o _evb_vars.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; evb_input.f &gt; _evb_input.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o evb_input.o _evb_input.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; evb_init.f &gt; _evb_init.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o evb_init.o _evb_init.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; evb_alloc.f &gt; _evb_alloc.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o evb_alloc.o _evb_alloc.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; evb_dealloc.f &gt; _evb_dealloc.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o evb_dealloc.o _evb_dealloc.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; check_input.f &gt; _check_input.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o check_input.o _check_input.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; evb_io.f &gt; _evb_io.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o evb_io.o _evb_io.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; evb_keywrd.f &gt; _evb_keywrd.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o evb_keywrd.o _evb_keywrd.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; exchange_CM.f &gt; _exchange_CM.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o exchange_CM.o _exchange_CM.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; evb_mcp.f &gt; _evb_mcp.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o evb_mcp.o _evb_mcp.f
</span><br>
<span class="quotelev1">&gt; _evb_mcp.f(146) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; evb_force.f &gt; _evb_force.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o evb_force.o  
</span><br>
<span class="quotelev1">&gt; _evb_force.f
</span><br>
<span class="quotelev1">&gt; _evb_force.f(257) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _evb_force.f(268) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _evb_force.f(269) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _evb_force.f(273) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _evb_force.f(273) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _evb_force.f(282) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _evb_force.f(282) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _evb_force.f(289) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _evb_force.f(362) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _evb_force.f(369) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _evb_force.f(369) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _evb_force.f(325) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _evb_force.f(330) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _evb_force.f(335) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _evb_force.f(335) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; diabatic.f &gt; _diabatic.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o diabatic.o _diabatic.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; evb_2stdebug.f &gt; _evb_2stdebug.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o evb_2stdebug.o _evb_2stdebug.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; egap_umb_2stdebug.f &gt; _egap_umb_2stdebug.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o egap_umb_2stdebug.o  
</span><br>
<span class="quotelev1">&gt; _egap_umb_2stdebug.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; exchange_gauss.f &gt; _exchange_gauss.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o exchange_gauss.o _exchange_gauss.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; exchange_warshel.f &gt; _exchange_warshel.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o exchange_warshel.o  
</span><br>
<span class="quotelev1">&gt; _exchange_warshel.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; parms.f &gt; _parms.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o parms.o _parms.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; morsify.f &gt; _morsify.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o morsify.o _morsify.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; morse_anal2num.f &gt; _morse_anal2num.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o morse_anal2num.o _morse_anal2num.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; evb_pimd_init.f &gt; _evb_pimd_init.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o evb_pimd_init.o _evb_pimd_init.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; evb_matrix.f &gt; _evb_matrix.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o evb_matrix.o  
</span><br>
<span class="quotelev1">&gt; _evb_matrix.f
</span><br>
<span class="quotelev1">&gt; _evb_matrix.f(72) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _evb_matrix.f(154) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _evb_matrix.f(154) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _evb_matrix.f(130) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _evb_matrix.f(130) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _evb_matrix.f(103) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _evb_matrix.f(105) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; evb_ntrfc.f &gt; _evb_ntrfc.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o evb_ntrfc.o _evb_ntrfc.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; out_evb.f &gt; _out_evb.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o out_evb.o _out_evb.f
</span><br>
<span class="quotelev1">&gt; _out_evb.f(296) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _out_evb.f(274) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _out_evb.f(255) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; constants.f &gt; _constants.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o constants.o  
</span><br>
<span class="quotelev1">&gt; _constants.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; stack.f &gt; _stack.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o stack.o _stack.f
</span><br>
<span class="quotelev1">&gt; _stack.f(181) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _stack.f(167) : (col. 11) remark: stack_mp_get_istack_ has been  
</span><br>
<span class="quotelev1">&gt; targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _stack.f(219) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _stack.f(383) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _stack.f(373) : (col. 11) remark: stack_mp_resize_istack_ has been  
</span><br>
<span class="quotelev1">&gt; targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _stack.f(405) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _stack.f(395) : (col. 11) remark: stack_mp_reassign_istack_ has  
</span><br>
<span class="quotelev1">&gt; been targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _stack.f(433) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _stack.f(454) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; findmask.f &gt; _findmask.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o findmask.o _findmask.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qmmm_module.f &gt; _qmmm_module.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qmmm_module.o  
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(804) : (col. 18) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(804) : (col. 18) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(807) : (col. 18) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(807) : (col. 18) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(809) : (col. 21) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(809) : (col. 21) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(811) : (col. 18) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(811) : (col. 18) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(812) : (col. 18) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(812) : (col. 18) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(813) : (col. 18) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(813) : (col. 18) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(814) : (col. 18) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(814) : (col. 18) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(520) : (col. 11) remark:  
</span><br>
<span class="quotelev1">&gt; qmmm_module_mp_qmmm_mpi_setup_ has been targeted for automatic cpu  
</span><br>
<span class="quotelev1">&gt; dispatch.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(1539) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(1580) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(1581) : (col. 44) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(1582) : (col. 27) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(1815) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(1374) : (col. 11) remark:  
</span><br>
<span class="quotelev1">&gt; qmmm_module_mp_read_qmmm_namelist_and_allocate_ has been targeted  
</span><br>
<span class="quotelev1">&gt; for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(1926) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(1928) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(1939) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(1908) : (col. 11) remark:  
</span><br>
<span class="quotelev1">&gt; qmmm_module_mp_reallocate_iqm_atno_array_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(1968) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(1970) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(1981) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f(1950) : (col. 11) remark:  
</span><br>
<span class="quotelev1">&gt; qmmm_module_mp_reallocate_iqmatoms_array_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; trace.f &gt; _trace.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o trace.o _trace.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; lmod.f &gt; _lmod.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o lmod.o _lmod.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; decomp.f &gt; _decomp.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o decomp.o _decomp.f
</span><br>
<span class="quotelev1">&gt; _decomp.f(152) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _decomp.f(156) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _decomp.f(181) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; icosasurf.f &gt; _icosasurf.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o icosasurf.o  
</span><br>
<span class="quotelev1">&gt; _icosasurf.f
</span><br>
<span class="quotelev1">&gt; _icosasurf.f(165) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; pimd_vars.f &gt; _pimd_vars.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o pimd_vars.o _pimd_vars.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI  egb.f  
</span><br>
<span class="quotelev2">&gt; &gt; _egb.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o egb.o _egb.f
</span><br>
<span class="quotelev1">&gt; _egb.f(858) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(883) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(910) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(937) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(974) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(977) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(980) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(999) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(1220) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(1256) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(1375) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(1836) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(2280) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(2367) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(2368) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(2525) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(2540) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(2541) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(2546) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(2548) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(2556) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(2558) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(2566) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(2569) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _egb.f(2576) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; sa_driver.f &gt; _sa_driver.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o sa_driver.o  
</span><br>
<span class="quotelev1">&gt; _sa_driver.f
</span><br>
<span class="quotelev1">&gt; _sa_driver.f(357) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sa_driver.f(397) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sa_driver.f(417) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sa_driver.f(752) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sa_driver.f(743) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sa_driver.f(868) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sa_driver.f(924) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sa_driver.f(1005) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sa_driver.f(1005) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sa_driver.f(1005) : (col. 27) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sa_driver.f(1005) : (col. 37) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sa_driver.f(1005) : (col. 49) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sa_driver.f(1232) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; pb_force.f &gt; _pb_force.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o pb_force.o  
</span><br>
<span class="quotelev1">&gt; _pb_force.f
</span><br>
<span class="quotelev1">&gt; _pb_force.f(445) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(605) : (col. 7) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(582) : (col. 7) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(582) : (col. 7) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(689) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(689) : (col. 47) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(736) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(719) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(770) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(840) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(841) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(842) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(843) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(844) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(845) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(846) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(847) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(848) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(849) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(850) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(851) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(852) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(853) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(854) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(855) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(856) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(857) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(858) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(869) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(863) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(879) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(880) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(881) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(889) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(918) : (col. 18) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(921) : (col. 18) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1222) : (col. 4) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1222) : (col. 4) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1232) : (col. 4) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1232) : (col. 4) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1295) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1720) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1720) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1720) : (col. 27) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1742) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1744) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1733) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1759) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1796) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1797) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1798) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1799) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1804) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1809) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1809) : (col. 34) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1823) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1820) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1818) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1818) : (col. 26) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1850) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1851) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1852) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1856) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1491) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_force.f(1678) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; pb_exmol.f &gt; _pb_exmol.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o pb_exmol.o  
</span><br>
<span class="quotelev1">&gt; _pb_exmol.f
</span><br>
<span class="quotelev1">&gt; _pb_exmol.f(163) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_exmol.f(163) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_exmol.f(163) : (col. 53) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_exmol.f(167) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_exmol.f(228) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_exmol.f(229) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_exmol.f(189) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_exmol.f(190) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_exmol.f(198) : (col. 30) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_exmol.f(202) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_exmol.f(215) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_exmol.f(417) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_exmol.f(425) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_exmol.f(427) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_exmol.f(427) : (col. 68) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_exmol.f(430) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_exmol.f(430) : (col. 68) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; pb_mpfrc.f &gt; _pb_mpfrc.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o pb_mpfrc.o  
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(175) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(175) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(175) : (col. 40) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(189) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(190) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(221) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(234) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(234) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(234) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(238) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(238) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(239) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(239) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(244) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(244) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(246) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(246) : (col. 21) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(249) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(256) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(294) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(335) : (col. 7) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(335) : (col. 7) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(395) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(406) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_mpfrc.f(415) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; pb_direct.f &gt; _pb_direct.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o pb_direct.o  
</span><br>
<span class="quotelev1">&gt; _pb_direct.f
</span><br>
<span class="quotelev1">&gt; _pb_direct.f(296) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_direct.f(304) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_direct.f(324) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_direct.f(454) : (col. 7) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_direct.f(454) : (col. 7) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_direct.f(469) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; pb_list.f &gt; _pb_list.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o pb_list.o _pb_list.f
</span><br>
<span class="quotelev1">&gt; _pb_list.f(168) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_list.f(223) : (col. 4) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_list.f(474) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_list.f(624) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pb_list.f(700) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; np_force.f &gt; _np_force.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o np_force.o  
</span><br>
<span class="quotelev1">&gt; _np_force.f
</span><br>
<span class="quotelev1">&gt; _np_force.f(367) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _np_force.f(371) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _np_force.f(381) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _np_force.f(381) : (col. 42) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _np_force.f(382) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _np_force.f(382) : (col. 29) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _np_force.f(382) : (col. 52) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; relax_mat.f &gt; _relax_mat.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o relax_mat.o  
</span><br>
<span class="quotelev1">&gt; _relax_mat.f
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(1253) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(3081) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(3100) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(3114) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(3118) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(3150) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(3190) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(365) : (col. 16) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(336) : (col. 16) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(2001) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(2013) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(2023) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(2062) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(2075) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(2050) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(2164) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(2184) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(2191) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(2128) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(2294) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(2286) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(2488) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(2643) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(2655) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(2512) : (col. 11) remark: relax_mat_mp_amatg_ has been  
</span><br>
<span class="quotelev1">&gt; targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(1068) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(3649) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(3653) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(3201) : (col. 11) remark: relax_mat_mp_noeread_ has  
</span><br>
<span class="quotelev1">&gt; been targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _relax_mat.f(1494) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI  nmr.f  
</span><br>
<span class="quotelev2">&gt; &gt; _nmr.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o nmr.o _nmr.f
</span><br>
<span class="quotelev1">&gt; _nmr.f(1704) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(1705) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(1727) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(1728) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(1783) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(1795) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(1807) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(1820) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(1835) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(1853) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(1870) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(1885) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(1898) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(2392) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(2459) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(2459) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(2459) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(2452) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(2452) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(2452) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(2445) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(2445) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(2445) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(3338) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(3338) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(3338) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(3321) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(3321) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(3321) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(3474) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(4335) : (col. 3) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(4674) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(4894) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(4894) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(4894) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(4888) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(4888) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(4888) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(4872) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(4872) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(4872) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(2842) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(5472) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(5625) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(5625) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(5625) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(5629) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(5629) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(5629) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(5633) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(5633) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(5633) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(5610) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(5610) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(5610) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(5614) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(5614) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nmr.f(5614) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; multisander.f &gt; _multisander.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o multisander.o _multisander.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; fastwt.f &gt; _fastwt.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o fastwt.o _fastwt.f
</span><br>
<span class="quotelev1">&gt; _fastwt.f(150) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _fastwt.f(153) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _fastwt.f(182) : (col. 4) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _fastwt.f(189) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _fastwt.f(193) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; nonbond_list.f &gt; _nonbond_list.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o nonbond_list.o  
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(828) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(828) : (col. 14) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(912) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(972) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(981) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(1924) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(1757) : (col. 11) remark: nblist_mp_setup_grids_  
</span><br>
<span class="quotelev1">&gt; has been targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(2243) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(2277) : (col. 4) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(1536) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(1587) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(1622) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(1546) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(1247) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(1252) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(1258) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(1336) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(1280) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(1034) : (col. 11) remark: nblist_mp_get_nb_list_  
</span><br>
<span class="quotelev1">&gt; has been targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(2463) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(2304) : (col. 11) remark: nblist_mp_pack_nb_list_  
</span><br>
<span class="quotelev1">&gt; has been targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(2623) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(2478) : (col. 11) remark:  
</span><br>
<span class="quotelev1">&gt; nblist_mp_pack_nb_nogrdptrs_ has been targeted for automatic cpu  
</span><br>
<span class="quotelev1">&gt; dispatch.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(2174) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(2193) : (col. 4) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(2658) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(3404) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(3411) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(3418) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f(3425) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; ew_bspline.f &gt; _ew_bspline.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o ew_bspline.o  
</span><br>
<span class="quotelev1">&gt; _ew_bspline.f
</span><br>
<span class="quotelev1">&gt; _ew_bspline.f(391) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_bspline.f(464) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_bspline.f(466) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_bspline.f(469) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_bspline.f(492) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_bspline.f(561) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_bspline.f(567) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_bspline.f(569) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_bspline.f(571) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_bspline.f(532) : (col. 11) remark: ew_bspline_mp_load_prefacs_  
</span><br>
<span class="quotelev1">&gt; has been targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _ew_bspline.f(593) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_bspline.f(579) : (col. 11) remark: ew_bspline_mp_dftmod_ has  
</span><br>
<span class="quotelev1">&gt; been targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _ew_bspline.f(677) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_bspline.f(677) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_bspline.f(701) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_bspline.f(740) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_bspline.f(740) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_bspline.f(764) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_bspline.f(769) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_bspline.f(796) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; ew_recip.f &gt; _ew_recip.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o ew_recip.o  
</span><br>
<span class="quotelev1">&gt; _ew_recip.f
</span><br>
<span class="quotelev1">&gt; _ew_recip.f(514) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip.f(514) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip.f(514) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip.f(514) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip.f(514) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip.f(982) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip.f(1025) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip.f(1671) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip.f(1678) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip.f(1685) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip.f(1695) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip.f(1799) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; amoeba_mdin.f &gt; _amoeba_mdin.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o amoeba_mdin.o  
</span><br>
<span class="quotelev1">&gt; _amoeba_mdin.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; amoeba_runmd.f &gt; _amoeba_runmd.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o amoeba_runmd.o  
</span><br>
<span class="quotelev1">&gt; _amoeba_runmd.f
</span><br>
<span class="quotelev1">&gt; _amoeba_runmd.f(567) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_runmd.f(575) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_runmd.f(576) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_runmd.f(577) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_runmd.f(578) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_runmd.f(589) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_runmd.f(589) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_runmd.f(618) : (col. 16) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_runmd.f(618) : (col. 16) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_runmd.f(618) : (col. 16) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_runmd.f(623) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_runmd.f(967) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_runmd.f(968) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_runmd.f(981) : (col. 4) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_runmd.f(981) : (col. 4) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_runmd.f(981) : (col. 4) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_runmd.f(1005) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; amoeba_multipoles.f &gt; _amoeba_multipoles.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o  
</span><br>
<span class="quotelev1">&gt; amoeba_multipoles.o _amoeba_multipoles.f
</span><br>
<span class="quotelev1">&gt; _amoeba_multipoles.f(291) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_multipoles.f(488) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_multipoles.f(830) : (col. 3) remark: PARTIAL LOOP WAS  
</span><br>
<span class="quotelev1">&gt; VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_multipoles.f(844) : (col. 5) remark: PARTIAL LOOP WAS  
</span><br>
<span class="quotelev1">&gt; VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_multipoles.f(873) : (col. 5) remark: PARTIAL LOOP WAS  
</span><br>
<span class="quotelev1">&gt; VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_multipoles.f(926) : (col. 5) remark: PARTIAL LOOP WAS  
</span><br>
<span class="quotelev1">&gt; VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_multipoles.f(562) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_multipoles.f(496) : (col. 11) remark:  
</span><br>
<span class="quotelev1">&gt; amoeba_multipoles_mp_am_mpole_get_de_drot_mpoles_ has been targeted  
</span><br>
<span class="quotelev1">&gt; for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _amoeba_multipoles.f(1046) : (col. 3) remark: PARTIAL LOOP WAS  
</span><br>
<span class="quotelev1">&gt; VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_multipoles.f(1061) : (col. 5) remark: PARTIAL LOOP WAS  
</span><br>
<span class="quotelev1">&gt; VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_multipoles.f(1095) : (col. 5) remark: PARTIAL LOOP WAS  
</span><br>
<span class="quotelev1">&gt; VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_multipoles.f(1215) : (col. 5) remark: PARTIAL LOOP WAS  
</span><br>
<span class="quotelev1">&gt; VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_multipoles.f(656) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_multipoles.f(662) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_multipoles.f(1464) : (col. 3) remark: PARTIAL LOOP WAS  
</span><br>
<span class="quotelev1">&gt; VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_multipoles.f(1478) : (col. 5) remark: PARTIAL LOOP WAS  
</span><br>
<span class="quotelev1">&gt; VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_multipoles.f(1514) : (col. 5) remark: PARTIAL LOOP WAS  
</span><br>
<span class="quotelev1">&gt; VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_multipoles.f(1572) : (col. 5) remark: PARTIAL LOOP WAS  
</span><br>
<span class="quotelev1">&gt; VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; amoeba_induced.f &gt; _amoeba_induced.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o amoeba_induced.o  
</span><br>
<span class="quotelev1">&gt; _amoeba_induced.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; amoeba_vdw.f &gt; _amoeba_vdw.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o amoeba_vdw.o  
</span><br>
<span class="quotelev1">&gt; _amoeba_vdw.f
</span><br>
<span class="quotelev1">&gt; _amoeba_vdw.f(229) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; amoeba_adjust.f &gt; _amoeba_adjust.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o amoeba_adjust.o  
</span><br>
<span class="quotelev1">&gt; _amoeba_adjust.f
</span><br>
<span class="quotelev1">&gt; _amoeba_adjust.f(893) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_adjust.f(1031) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_adjust.f(1157) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_adjust.f(1215) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_adjust.f(1409) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_adjust.f(1485) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_adjust.f(1666) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_adjust.f(1735) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_adjust.f(1742) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; amoeba_recip.f &gt; _amoeba_recip.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o amoeba_recip.o  
</span><br>
<span class="quotelev1">&gt; _amoeba_recip.f
</span><br>
<span class="quotelev1">&gt; _amoeba_recip.f(1061) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_recip.f(1066) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_recip.f(1079) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_recip.f(1087) : (col. 10) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_recip.f(1124) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_recip.f(1256) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_recip.f(1262) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_recip.f(1276) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_recip.f(1286) : (col. 11) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_recip.f(1290) : (col. 11) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_recip.f(1361) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_recip.f(1386) : (col. 5) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_recip.f(1368) : (col. 11) remark:  
</span><br>
<span class="quotelev1">&gt; amoeba_recip_mp_am_recip_perm_ene_grad_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _amoeba_recip.f(1533) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_recip.f(849) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_recip.f(1686) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_recip.f(1668) : (col. 11) remark:  
</span><br>
<span class="quotelev1">&gt; amoeba_recip_mp_am_test_frac_cart_ene_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; amoeba_valence.f &gt; _amoeba_valence.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o amoeba_valence.o  
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(3414) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(3408) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(3402) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(1167) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(1398) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(1406) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(1445) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(1541) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(1665) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(1665) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(1665) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(1668) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(1742) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(1843) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(1977) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(1977) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(1977) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(1980) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(2109) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(2114) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(2209) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(2433) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(2798) : (col. 4) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(3106) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(3122) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(3205) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_valence.f(3209) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; amoeba_direct.f &gt; _amoeba_direct.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o amoeba_direct.o  
</span><br>
<span class="quotelev1">&gt; _amoeba_direct.f
</span><br>
<span class="quotelev1">&gt; _amoeba_direct.f(1053) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_direct.f(1192) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_direct.f(1265) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_direct.f(1360) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_direct.f(1606) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_direct.f(1705) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; amoeba_self.f &gt; _amoeba_self.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o amoeba_self.o  
</span><br>
<span class="quotelev1">&gt; _amoeba_self.f
</span><br>
<span class="quotelev1">&gt; _amoeba_self.f(308) : (col. 3) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_self.f(328) : (col. 3) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_self.f(338) : (col. 3) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_self.f(351) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_self.f(419) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_self.f(443) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; amoeba_interface.f &gt; _amoeba_interface.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o amoeba_interface.o  
</span><br>
<span class="quotelev1">&gt; _amoeba_interface.f
</span><br>
<span class="quotelev1">&gt; _amoeba_interface.f(174) : (col. 2) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_interface.f(175) : (col. 2) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _amoeba_interface.f(592) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; sander.f &gt; _sander.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o sander.o _sander.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; trajene.f &gt; _trajene.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o trajene.o _trajene.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; cshf.f &gt; _cshf.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o cshf.o _cshf.f
</span><br>
<span class="quotelev1">&gt; _cshf.f(469) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _cshf.f(497) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _cshf.f(625) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _cshf.f(805) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _cshf.f(810) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _cshf.f(815) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _cshf.f(823) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _cshf.f(1215) : (col. 7) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _cshf.f(1215) : (col. 7) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; nmrcal.f &gt; _nmrcal.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o nmrcal.o _nmrcal.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; pearsn.f &gt; _pearsn.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o pearsn.o _pearsn.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; printe.f &gt; _printe.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o printe.o _printe.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; runmin.f &gt; _runmin.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o runmin.o _runmin.f
</span><br>
<span class="quotelev1">&gt; _runmin.f(768) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmin.f(916) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmin.f(920) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmin.f(943) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmin.f(944) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmin.f(1128) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmin.f(1129) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmin.f(1099) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmin.f(1099) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmin.f(986) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmin.f(1000) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmin.f(883) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmin.f(884) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmin.f(897) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; rdparm.f &gt; _rdparm.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o rdparm.o _rdparm.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; mdread.f &gt; _mdread.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o mdread.o _mdread.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; locmem.f &gt; _locmem.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o locmem.o _locmem.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; bintraj.f &gt; _bintraj.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o bintraj.o _bintraj.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; runmd.f &gt; _runmd.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o runmd.o _runmd.f
</span><br>
<span class="quotelev1">&gt; _runmd.f(1093) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1094) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1095) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1096) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1097) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1098) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1099) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1107) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1118) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1215) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1253) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1257) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1326) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1427) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1415) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1408) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1396) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1561) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1561) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1561) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1638) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1653) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1661) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1665) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1704) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1769) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1802) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1897) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1942) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1943) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1962) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(1963) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(2022) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(2023) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(2079) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(2118) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(2239) : (col. 13) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(2239) : (col. 13) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(2239) : (col. 13) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(2262) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(2264) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(2299) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(2344) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(87) : (col. 11) remark: runmd_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _runmd.f(2507) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(2520) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(2518) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _runmd.f(2377) : (col. 11) remark: quench_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; getcor.f &gt; _getcor.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o getcor.o _getcor.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; degcnt.f &gt; _degcnt.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o degcnt.o _degcnt.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; decnvh.f &gt; _decnvh.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o decnvh.o _decnvh.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; spatial_fft.f &gt; _spatial_fft.f
</span><br>
<span class="quotelev1">&gt; spatial_fft.f:829: warning: &quot;AMBER_MPI_REAL&quot; redefined
</span><br>
<span class="quotelev1">&gt; In file included from spatial_fft.f:4:
</span><br>
<span class="quotelev1">&gt; dprec.h:42: warning: this is the location of the previous definition
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o spatial_fft.o  
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f(275) : (col. 11) remark: fft_mp_backward_rc_fft_ has  
</span><br>
<span class="quotelev1">&gt; been targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f(911) : (col. 11) remark: fft_mp_fft_1d_realcomplex_  
</span><br>
<span class="quotelev1">&gt; has been targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f(1047) : (col. 11) remark: fft_mp_transpose_ has been  
</span><br>
<span class="quotelev1">&gt; targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f(612) : (col. 11) remark: fft_mp_forward_rc_fft_ has  
</span><br>
<span class="quotelev1">&gt; been targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f(1454) : (col. 11) remark: fft_mp_ftranspose_ has  
</span><br>
<span class="quotelev1">&gt; been targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f(1869) : (col. 11) remark: fft_mp_x_fft_ has been  
</span><br>
<span class="quotelev1">&gt; targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f(1981) : (col. 11) remark: fft_mp_y_fft_ has been  
</span><br>
<span class="quotelev1">&gt; targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f(2091) : (col. 11) remark: fft_mp_z_fft_ has been  
</span><br>
<span class="quotelev1">&gt; targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f(597) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; parallel.f &gt; _parallel.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o parallel.o _parallel.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; shake.f &gt; _shake.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o shake.o _shake.f
</span><br>
<span class="quotelev1">&gt; _shake.f(271) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _shake.f(399) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI  ene.f  
</span><br>
<span class="quotelev2">&gt; &gt; _ene.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o ene.o _ene.f
</span><br>
<span class="quotelev1">&gt; _ene.f(400) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ene.f(464) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ene.f(72) : (col. 11) remark: bond_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _ene.f(813) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ene.f(880) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ene.f(479) : (col. 11) remark: angl_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _ene.f(1223) : (col. 4) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ene.f(1223) : (col. 4) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ene.f(1223) : (col. 4) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ene.f(1232) : (col. 4) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ene.f(1232) : (col. 4) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ene.f(1244) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ene.f(1296) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ene.f(1357) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ene.f(1473) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ene.f(894) : (col. 11) remark: ephi_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _ene.f(1684) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ene.f(2382) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; mdwrit.f &gt; _mdwrit.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o mdwrit.o _mdwrit.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; minrit.f &gt; _minrit.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o minrit.o _minrit.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI  set.f  
</span><br>
<span class="quotelev2">&gt; &gt; _set.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o set.o _set.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dynlib.f &gt; _dynlib.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o dynlib.o _dynlib.f
</span><br>
<span class="quotelev1">&gt; _dynlib.f(1238) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dynlib.f(1218) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; mdfil.f &gt; _mdfil.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o mdfil.o _mdfil.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; nmlsrc.f &gt; _nmlsrc.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o nmlsrc.o _nmlsrc.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; ew_dipole_recip.f &gt; _ew_dipole_recip.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o ew_dipole_recip.o  
</span><br>
<span class="quotelev1">&gt; _ew_dipole_recip.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; spatial_dcmp.f &gt; _spatial_dcmp.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o spatial_dcmp.o  
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(292) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(310) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(301) : (col. 11) remark:  
</span><br>
<span class="quotelev1">&gt; spatial_mp_prefill_spatial_lists_ has been targeted for automatic  
</span><br>
<span class="quotelev1">&gt; cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(574) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(595) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(596) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(597) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(598) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(611) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(612) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(638) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(643) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(643) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(320) : (col. 11) remark:  
</span><br>
<span class="quotelev1">&gt; spatial_mp_spatial_startup_ has been targeted for automatic cpu  
</span><br>
<span class="quotelev1">&gt; dispatch.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(943) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(1294) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(1294) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(1115) : (col. 11) remark:  
</span><br>
<span class="quotelev1">&gt; spatial_mp_fill_spatial_direct_ has been targeted for automatic cpu  
</span><br>
<span class="quotelev1">&gt; dispatch.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(4555) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(4565) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(4670) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(4674) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(4496) : (col. 11) remark:  
</span><br>
<span class="quotelev1">&gt; spatial_mp_shake_spatial_startup_ has been targeted for automatic  
</span><br>
<span class="quotelev1">&gt; cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(1933) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(1999) : (col. 10) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(1999) : (col. 10) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(1864) : (col. 11) remark:  
</span><br>
<span class="quotelev1">&gt; spatial_mp_get_send_tasks_ has been targeted for automatic cpu  
</span><br>
<span class="quotelev1">&gt; dispatch.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(2157) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(2185) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(2193) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(2230) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(2036) : (col. 11) remark:  
</span><br>
<span class="quotelev1">&gt; spatial_mp_dcmp_fill_ownedfrc_ has been targeted for automatic cpu  
</span><br>
<span class="quotelev1">&gt; dispatch.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(805) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(809) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(1653) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(1754) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(1755) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(1845) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(2583) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(3479) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(3524) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(3524) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(3597) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(3598) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(3601) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(3601) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(3283) : (col. 11) remark:  
</span><br>
<span class="quotelev1">&gt; spatial_mp_spatial_newcells_ has been targeted for automatic cpu  
</span><br>
<span class="quotelev1">&gt; dispatch.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(4115) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(4118) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(4129) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(4141) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(4159) : (col. 18) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(3871) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_dcmp.f(3677) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; spatial_recip.f &gt; _spatial_recip.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o spatial_recip.o  
</span><br>
<span class="quotelev1">&gt; _spatial_recip.f
</span><br>
<span class="quotelev1">&gt; _spatial_recip.f(524) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_recip.f(524) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_recip.f(524) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_recip.f(524) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_recip.f(524) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_recip.f(114) : (col. 11) remark:  
</span><br>
<span class="quotelev1">&gt; ew_recip_spatial_mp_spatial_do_pmesh_kspace_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _spatial_recip.f(600) : (col. 11) remark:  
</span><br>
<span class="quotelev1">&gt; ew_recip_spatial_mp_spatial_fill_charge_grid_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _spatial_recip.f(1033) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_recip.f(1080) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_recip.f(801) : (col. 11) remark:  
</span><br>
<span class="quotelev1">&gt; ew_recip_spatial_mp_spatial_grad_sumrc_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _spatial_recip.f(1738) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_recip.f(1745) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_recip.f(1752) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_recip.f(1762) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_recip.f(1861) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _spatial_recip.f(1498) : (col. 11) remark:  
</span><br>
<span class="quotelev1">&gt; ew_recip_spatial_mp_spatial_scalar_sumrc_orthog_ has been targeted  
</span><br>
<span class="quotelev1">&gt; for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; ew_force.f &gt; _ew_force.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o ew_force.o  
</span><br>
<span class="quotelev1">&gt; _ew_force.f
</span><br>
<span class="quotelev1">&gt; _ew_force.f(777) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(778) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(779) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(780) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(781) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(782) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(783) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(784) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(808) : (col. 20) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(889) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(891) : (col. 58) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(891) : (col. 58) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(934) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(935) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(946) : (col. 53) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(947) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(946) : (col. 53) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(947) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(876) : (col. 60) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(876) : (col. 60) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(1148) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(84) : (col. 11) remark: ewald_force_ has been targeted  
</span><br>
<span class="quotelev1">&gt; for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(1497) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(2617) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_force.f(2473) : (col. 11) remark: self_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; ew_setup.f &gt; _ew_setup.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o ew_setup.o  
</span><br>
<span class="quotelev1">&gt; _ew_setup.f
</span><br>
<span class="quotelev1">&gt; _ew_setup.f(193) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_setup.f(226) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_setup.f(108) : (col. 11) remark: check_neutral_ has been  
</span><br>
<span class="quotelev1">&gt; targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _ew_setup.f(1555) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_setup.f(1556) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_setup.f(2167) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_setup.f(2182) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_setup.f(2198) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_setup.f(3469) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_setup.f(3532) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_setup.f(3547) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_setup.f(3749) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; ew_box.f &gt; _ew_box.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o ew_box.o _ew_box.f
</span><br>
<span class="quotelev1">&gt; _ew_box.f(308) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_box.f(498) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_box.f(1404) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_box.f(1408) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; ew_fft.f &gt; _ew_fft.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o ew_fft.o _ew_fft.f
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(201) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(201) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(201) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(201) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(466) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(473) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(488) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(495) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(247) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(247) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2247) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2326) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2344) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2345) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2261) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2265) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2298) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2734) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2741) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2756) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2765) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2777) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2784) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2800) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2827) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(3013) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2892) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2854) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2943) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(1863) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(1869) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(281) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(281) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2111) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2123) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(314) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(314) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(1551) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(1549) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(1567) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(1573) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(1571) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(1491) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(1497) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(1519) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(3072) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(3079) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(3094) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(3103) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(3115) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(3122) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(3138) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(3165) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(3351) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(3230) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(3192) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(3281) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2450) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2534) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2515) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_fft.f(2599) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; short_ene.f &gt; _short_ene.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o short_ene.o  
</span><br>
<span class="quotelev1">&gt; _short_ene.f
</span><br>
<span class="quotelev1">&gt; _short_ene.f(296) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _short_ene.f(580) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _short_ene.f(743) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; pcshift.f &gt; _pcshift.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o pcshift.o _pcshift.f
</span><br>
<span class="quotelev1">&gt; _pcshift.f(553) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pcshift.f(579) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pcshift.f(528) : (col. 11) remark: calcresid_ has been targeted  
</span><br>
<span class="quotelev1">&gt; for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _pcshift.f(942) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pcshift.f(977) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pcshift.f(1011) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _pcshift.f(807) : (col. 11) remark: derivshift_ has been targeted  
</span><br>
<span class="quotelev1">&gt; for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; align.f &gt; _align.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o align.o _align.f
</span><br>
<span class="quotelev1">&gt; _align.f(487) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _align.f(520) : (col. 7) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _align.f(530) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _align.f(72) : (col. 11) remark: align1_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _align.f(830) : (col. 4) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _align.f(830) : (col. 4) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; rfree.f &gt; _rfree.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o rfree.o _rfree.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; rgroup.f &gt; _rgroup.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o rgroup.o _rgroup.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; random.f &gt; _random.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o random.o _random.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; amopen.f &gt; _amopen.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o amopen.o _amopen.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; debug.f &gt; _debug.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o debug.o _debug.f
</span><br>
<span class="quotelev1">&gt; _debug.f(242) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _debug.f(612) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _debug.f(647) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _debug.f(3105) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _debug.f(1163) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _debug.f(1166) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _debug.f(2590) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; ew_recip_reg.f &gt; _ew_recip_reg.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o ew_recip_reg.o  
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(131) : (col. 8) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(131) : (col. 8) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(131) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(131) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(131) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(131) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(131) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(89) : (col. 11) remark: recip_reg_ has been  
</span><br>
<span class="quotelev1">&gt; targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(188) : (col. 4) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(205) : (col. 7) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(230) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(225) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(261) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(256) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(269) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(154) : (col. 11) remark: do_recip_reg_ has been  
</span><br>
<span class="quotelev1">&gt; targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(356) : (col. 8) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(356) : (col. 8) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(356) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(356) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(356) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(356) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(415) : (col. 4) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(432) : (col. 7) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(457) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(452) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(488) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ew_recip_reg.f(483) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; ew_handle_dips.f &gt; _ew_handle_dips.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o ew_handle_dips.o  
</span><br>
<span class="quotelev1">&gt; _ew_handle_dips.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; mexit.f &gt; _mexit.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o mexit.o _mexit.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; new_time.f &gt; _new_time.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o new_time.o  
</span><br>
<span class="quotelev1">&gt; _new_time.f
</span><br>
<span class="quotelev1">&gt; _new_time.f(1330) : (col. 7) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _new_time.f(1330) : (col. 7) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _new_time.f(1344) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _new_time.f(1354) : (col. 10) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _new_time.f(1354) : (col. 10) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _new_time.f(1354) : (col. 10) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _new_time.f(1366) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _new_time.f(1379) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _new_time.f(1308) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _new_time.f(825) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _new_time.f(833) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _new_time.f(853) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _new_time.f(868) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _new_time.f(264) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _new_time.f(274) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; extra_pts.f &gt; _extra_pts.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o extra_pts.o  
</span><br>
<span class="quotelev1">&gt; _extra_pts.f
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(2013) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(2026) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(2002) : (col. 11) remark: fix_masses_ has been  
</span><br>
<span class="quotelev1">&gt; targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(943) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(1013) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(1102) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(1102) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(1102) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(1102) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(1102) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(1102) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(1102) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(1139) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(1141) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(1142) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(1146) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(1218) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(1282) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(1257) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(1529) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(1545) : (col. 4) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(1517) : (col. 11) remark: redo_masked_ has been  
</span><br>
<span class="quotelev1">&gt; targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(1468) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(1476) : (col. 4) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(1490) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(690) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(788) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(642) : (col. 11) remark: define_frames_ has been  
</span><br>
<span class="quotelev1">&gt; targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(597) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(598) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(599) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(600) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(601) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(602) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(535) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(535) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _extra_pts.f(290) : (col. 11) remark: init_extra_pts_ has been  
</span><br>
<span class="quotelev1">&gt; targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; thermo_int.f &gt; _thermo_int.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o thermo_int.o _thermo_int.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; matinv.f &gt; _matinv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o matinv.o _matinv.f
</span><br>
<span class="quotelev1">&gt; _matinv.f(136) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; assert.f &gt; _assert.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o assert.o _assert.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; mmtsb.f &gt; _mmtsb.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o mmtsb.o _mmtsb.f
</span><br>
<span class="quotelev1">&gt; gcc -c -D_FILE_OFFSET_BITS=64 -D_LARGEFILE_SOURCE -m64 -O2  -o  
</span><br>
<span class="quotelev1">&gt; mmtsb_client.o mmtsb_client.c
</span><br>
<span class="quotelev1">&gt; mmtsb_client.c: In function &#145;mmtsb_client_dummy&#146;:
</span><br>
<span class="quotelev1">&gt; mmtsb_client.c:380: warning: incompatible implicit declaration of  
</span><br>
<span class="quotelev1">&gt; built-in function &#145;printf&#146;
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; erfcfun.f &gt; _erfcfun.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o erfcfun.o _erfcfun.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; veclib.f &gt; _veclib.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o veclib.o _veclib.f
</span><br>
<span class="quotelev1">&gt; _veclib.f(79) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _veclib.f(93) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _veclib.f(107) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _veclib.f(121) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _veclib.f(132) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _veclib.f(144) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; is_init.f &gt; _is_init.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o is_init.o _is_init.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; constantph.f &gt; _constantph.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o constantph.o  
</span><br>
<span class="quotelev1">&gt; _constantph.f
</span><br>
<span class="quotelev1">&gt; _constantph.f(503) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; prn_dipoles.f &gt; _prn_dipoles.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o prn_dipoles.o  
</span><br>
<span class="quotelev1">&gt; _prn_dipoles.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI  ips.f  
</span><br>
<span class="quotelev2">&gt; &gt; _ips.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o ips.o _ips.f
</span><br>
<span class="quotelev1">&gt; _ips.f(227) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ips.f(708) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ips.f(715) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; sglds.f &gt; _sglds.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o sglds.o _sglds.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm_mm.f &gt; _qm_mm.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm_mm.o _qm_mm.f
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(321) : (col. 34) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(368) : (col. 46) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(368) : (col. 46) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(377) : (col. 40) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(377) : (col. 40) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(353) : (col. 51) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(353) : (col. 51) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(361) : (col. 27) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(361) : (col. 65) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(361) : (col. 27) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(361) : (col. 65) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(421) : (col. 82) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(421) : (col. 82) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(436) : (col. 29) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(436) : (col. 43) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(436) : (col. 58) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(436) : (col. 29) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(436) : (col. 43) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(436) : (col. 58) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(449) : (col. 85) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(449) : (col. 85) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(467) : (col. 30) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(467) : (col. 78) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(467) : (col. 30) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(467) : (col. 78) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(489) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(491) : (col. 26) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(491) : (col. 26) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(498) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(500) : (col. 31) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(500) : (col. 50) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(500) : (col. 70) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(500) : (col. 31) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(500) : (col. 50) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(500) : (col. 70) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(511) : (col. 30) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(511) : (col. 51) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(514) : (col. 30) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(514) : (col. 50) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(515) : (col. 30) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(511) : (col. 30) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(511) : (col. 51) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(514) : (col. 30) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(514) : (col. 50) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(515) : (col. 30) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(81) : (col. 11) remark: qm_mm_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _qm_mm.f(937) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm_link_atoms.f &gt; _qm_link_atoms.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm_link_atoms.o  
</span><br>
<span class="quotelev1">&gt; _qm_link_atoms.f
</span><br>
<span class="quotelev1">&gt; _qm_link_atoms.f(174) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_link_atoms.f(174) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_link_atoms.f(179) : (col. 2) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_link_atoms.f(198) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_link_atoms.f(82) : (col. 11) remark: identify_link_atoms_ has  
</span><br>
<span class="quotelev1">&gt; been targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _qm_link_atoms.f(361) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm_nb_list.f &gt; _qm_nb_list.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm_nb_list.o  
</span><br>
<span class="quotelev1">&gt; _qm_nb_list.f
</span><br>
<span class="quotelev1">&gt; _qm_nb_list.f(177) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm_extract_coords.f &gt; _qm_extract_coords.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o  
</span><br>
<span class="quotelev1">&gt; qm_extract_coords.o _qm_extract_coords.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm_ewald.f &gt; _qm_ewald.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm_ewald.o  
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(382) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(391) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(601) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(606) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(686) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(774) : (col. 2) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(778) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(836) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(847) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(955) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(932) : (col. 11) remark: qm_ewald_core_ has been  
</span><br>
<span class="quotelev1">&gt; targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(1080) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(1082) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(1091) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(1092) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(1054) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(1062) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(1064) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(1065) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(1109) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(1112) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(1122) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(1123) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(1139) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(1146) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(1205) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(1258) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(1275) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(1298) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f(1296) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm_gb.f &gt; _qm_gb.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm_gb.o _qm_gb.f
</span><br>
<span class="quotelev1">&gt; _qm_gb.f(196) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_gb.f(202) : (col. 38) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_gb.f(202) : (col. 38) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_gb.f(203) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_gb.f(203) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_gb.f(204) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_gb.f(204) : (col. 49) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_gb.f(204) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_gb.f(204) : (col. 49) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_gb.f(283) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_gb.f(291) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm_zero_charges.f &gt; _qm_zero_charges.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm_zero_charges.o  
</span><br>
<span class="quotelev1">&gt; _qm_zero_charges.f
</span><br>
<span class="quotelev1">&gt; _qm_zero_charges.f(215) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm_print_info.f &gt; _qm_print_info.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm_print_info.o  
</span><br>
<span class="quotelev1">&gt; _qm_print_info.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm_assign_atom_types.f &gt; _qm_assign_atom_types.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o  
</span><br>
<span class="quotelev1">&gt; qm_assign_atom_types.o _qm_assign_atom_types.f
</span><br>
<span class="quotelev1">&gt; _qm_assign_atom_types.f(61) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm_assign_atom_types.f(62) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_allocate_e_repul.f &gt; _qm2_allocate_e_repul.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o  
</span><br>
<span class="quotelev1">&gt; qm2_allocate_e_repul.o _qm2_allocate_e_repul.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_calc_charges.f &gt; _qm2_calc_charges.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm2_calc_charges.o  
</span><br>
<span class="quotelev1">&gt; _qm2_calc_charges.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_calc_rij_and_eqns.f &gt; _qm2_calc_rij_and_eqns.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o  
</span><br>
<span class="quotelev1">&gt; qm2_calc_rij_and_eqns.o _qm2_calc_rij_and_eqns.f
</span><br>
<span class="quotelev1">&gt; _qm2_calc_rij_and_eqns.f(178) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dihed.f &gt; _qm2_dihed.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm2_dihed.o  
</span><br>
<span class="quotelev1">&gt; _qm2_dihed.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_energy.f &gt; _qm2_energy.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm2_energy.o  
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(212) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(224) : (col. 29) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(224) : (col. 75) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(225) : (col. 54) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(226) : (col. 47) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(224) : (col. 29) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(224) : (col. 75) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(225) : (col. 54) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(226) : (col. 47) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(250) : (col. 31) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(250) : (col. 53) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(250) : (col. 31) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(250) : (col. 53) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(268) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(269) : (col. 57) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(269) : (col. 73) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(272) : (col. 30) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(273) : (col. 66) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(269) : (col. 57) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(269) : (col. 73) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(272) : (col. 30) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(273) : (col. 66) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(278) : (col. 61) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(278) : (col. 80) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(280) : (col. 35) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(278) : (col. 61) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(278) : (col. 80) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(280) : (col. 35) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(306) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(306) : (col. 50) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(306) : (col. 69) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(306) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(306) : (col. 50) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(306) : (col. 69) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(321) : (col. 31) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(322) : (col. 58) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(321) : (col. 31) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(322) : (col. 58) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(332) : (col. 21) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(332) : (col. 45) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(332) : (col. 64) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(333) : (col. 21) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(333) : (col. 43) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(332) : (col. 21) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(332) : (col. 45) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(332) : (col. 64) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(333) : (col. 21) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(333) : (col. 43) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(289) : (col. 37) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(289) : (col. 37) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(351) : (col. 46) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(351) : (col. 67) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(351) : (col. 82) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(351) : (col. 46) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(351) : (col. 67) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(351) : (col. 82) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(369) : (col. 26) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(369) : (col. 26) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_energy.f(69) : (col. 11) remark: qm2_energy_ has been targeted  
</span><br>
<span class="quotelev1">&gt; for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_fock.f &gt; _qm2_fock.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm2_fock.o  
</span><br>
<span class="quotelev1">&gt; _qm2_fock.f
</span><br>
<span class="quotelev1">&gt; _qm2_fock.f(282) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_fock.f(245) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_fock.f(230) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_fock.f(139) : (col. 11) remark: qm2_fock2_ has been targeted  
</span><br>
<span class="quotelev1">&gt; for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _qm2_fock.f(547) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_get_qm_forces.f &gt; _qm2_get_qm_forces.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o  
</span><br>
<span class="quotelev1">&gt; qm2_get_qm_forces.o _qm2_get_qm_forces.f
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(134) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(166) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(177) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(183) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(232) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(256) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(256) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(262) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(262) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(484) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(492) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(560) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(560) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(611) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(611) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(663) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(663) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(663) : (col. 31) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(1026) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(1026) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(1026) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(1027) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(1027) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(1027) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(1028) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(1028) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(1028) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qm_forces.f(276) : (col. 11) remark: qm2_deriv_qm_analyt_  
</span><br>
<span class="quotelev1">&gt; has been targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_get_qmmm_forces.f &gt; _qm2_get_qmmm_forces.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o  
</span><br>
<span class="quotelev1">&gt; qm2_get_qmmm_forces.o _qm2_get_qmmm_forces.f
</span><br>
<span class="quotelev1">&gt; _qm2_get_qmmm_forces.f(131) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qmmm_forces.f(180) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qmmm_forces.f(139) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qmmm_forces.f(165) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qmmm_forces.f(477) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qmmm_forces.f(478) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qmmm_forces.f(479) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qmmm_forces.f(480) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qmmm_forces.f(481) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qmmm_forces.f(482) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qmmm_forces.f(483) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qmmm_forces.f(484) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_get_qmmm_forces.f(485) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_h1elec.f &gt; _qm2_h1elec.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm2_h1elec.o  
</span><br>
<span class="quotelev1">&gt; _qm2_h1elec.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_hcore_qmqm.f &gt; _qm2_hcore_qmqm.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm2_hcore_qmqm.o  
</span><br>
<span class="quotelev1">&gt; _qm2_hcore_qmqm.f
</span><br>
<span class="quotelev1">&gt; _qm2_hcore_qmqm.f(172) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_hcore_qmqm.f(219) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_hcore_qmqm.f(231) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_hcore_qmmm.f &gt; _qm2_hcore_qmmm.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm2_hcore_qmmm.o  
</span><br>
<span class="quotelev1">&gt; _qm2_hcore_qmmm.f
</span><br>
<span class="quotelev1">&gt; _qm2_hcore_qmmm.f(135) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_identify_peptide_links.f &gt; _qm2_identify_peptide_links.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o  
</span><br>
<span class="quotelev1">&gt; qm2_identify_peptide_links.o _qm2_identify_peptide_links.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_load_params_and_allocate.f &gt; _qm2_load_params_and_allocate.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o qm2_load_params_and_allocate.o  
</span><br>
<span class="quotelev1">&gt; _qm2_load_params_and_allocate.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_repp.f &gt; _qm2_repp.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm2_repp.o  
</span><br>
<span class="quotelev1">&gt; _qm2_repp.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_rotate_qmqm.f &gt; _qm2_rotate_qmqm.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm2_rotate_qmqm.o  
</span><br>
<span class="quotelev1">&gt; _qm2_rotate_qmqm.f
</span><br>
<span class="quotelev1">&gt; _qm2_rotate_qmqm.f(204) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_rotate_qmqm.f(645) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_rotate_qmqm.f(652) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_rotate_qmqm.f(69) : (col. 11) remark: qm2_rotate_qmqm_ has  
</span><br>
<span class="quotelev1">&gt; been targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_scf.f &gt; _qm2_scf.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm2_scf.o _qm2_scf.f
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(302) : (col. 24) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(302) : (col. 47) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(302) : (col. 24) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(302) : (col. 47) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(304) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(340) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(340) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(317) : (col. 43) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(319) : (col. 50) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(317) : (col. 43) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(319) : (col. 50) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(356) : (col. 24) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(356) : (col. 24) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(358) : (col. 31) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(358) : (col. 31) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(365) : (col. 23) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(365) : (col. 23) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(385) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(387) : (col. 37) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(387) : (col. 37) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(400) : (col. 32) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(400) : (col. 54) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(400) : (col. 32) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(400) : (col. 54) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(402) : (col. 44) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(402) : (col. 58) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(402) : (col. 44) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(402) : (col. 58) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(411) : (col. 29) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(413) : (col. 55) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(413) : (col. 55) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(491) : (col. 8) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(492) : (col. 67) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(492) : (col. 82) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(492) : (col. 67) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(492) : (col. 82) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(495) : (col. 66) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(495) : (col. 82) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(495) : (col. 66) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(495) : (col. 82) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(69) : (col. 11) remark: qm2_scf_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(1103) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(1118) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(1145) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(1040) : (col. 11) remark: qm2_pseudo_diag_ has been  
</span><br>
<span class="quotelev1">&gt; targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(779) : (col. 10) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(797) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(814) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(824) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(841) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(845) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(846) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(847) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(964) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(983) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(1008) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(1017) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(1021) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(1028) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(1032) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(726) : (col. 11) remark: qm2_mat_diag_ has been targeted  
</span><br>
<span class="quotelev1">&gt; for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(672) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(1184) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f(1157) : (col. 9) remark: qm2_helect_ has been targeted  
</span><br>
<span class="quotelev1">&gt; for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_setup_orb_exp.f &gt; _qm2_setup_orb_exp.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o  
</span><br>
<span class="quotelev1">&gt; qm2_setup_orb_exp.o _qm2_setup_orb_exp.f
</span><br>
<span class="quotelev1">&gt; _qm2_setup_orb_exp.f(108) : (col. 5) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_setup_orb_exp.f(114) : (col. 5) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_setup_orb_exp.f(121) : (col. 5) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_setup_orb_exp.f(127) : (col. 5) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_setup_orb_exp.f(134) : (col. 5) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_setup_orb_exp.f(140) : (col. 5) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_setup_orb_exp.f(147) : (col. 5) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_setup_orb_exp.f(153) : (col. 5) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_setup_orb_exp.f(160) : (col. 5) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_setup_orb_exp.f(166) : (col. 5) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_setup_orb_exp.f(173) : (col. 5) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_setup_orb_exp.f(179) : (col. 5) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_setup_orb_exp.f(186) : (col. 5) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_setup_orb_exp.f(192) : (col. 5) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_setup_orb_exp.f(199) : (col. 5) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_setup_orb_exp.f(205) : (col. 5) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_setup_orb_exp.f(212) : (col. 5) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_setup_orb_exp.f(218) : (col. 5) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_setup_orb_exp.f(225) : (col. 5) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_setup_orb_exp.f(231) : (col. 5) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_setup_orb_exp.f(238) : (col. 5) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_setup_orb_exp.f(244) : (col. 5) remark: BLOCK WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_smallest_number.f &gt; _qm2_smallest_number.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o qm2_smallest_number.o  
</span><br>
<span class="quotelev1">&gt; _qm2_smallest_number.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_module.f &gt; _qm2_dftb_module.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o qm2_dftb_module.o _qm2_dftb_module.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_broyden.f &gt; _qm2_dftb_broyden.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm2_dftb_broyden.o  
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(161) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(340) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(344) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(348) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(353) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(186) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(190) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(195) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(199) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(207) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(217) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(237) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(241) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(247) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(259) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(266) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(270) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(287) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(291) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(297) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(305) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(305) : (col. 21) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(305) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(305) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(305) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(305) : (col. 21) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(308) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(314) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(318) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(323) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(326) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(364) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(67) : (col. 11) remark: broyden_ has been  
</span><br>
<span class="quotelev1">&gt; targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(436) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_broyden.f(448) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_dispersion_egr.f &gt; _qm2_dftb_dispersion_egr.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o  
</span><br>
<span class="quotelev1">&gt; qm2_dftb_dispersion_egr.o _qm2_dftb_dispersion_egr.f
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_dispersion_egr.f(87) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_dispersion_egr.f(111) : (col. 10) remark: LOOP WAS  
</span><br>
<span class="quotelev1">&gt; VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_dispersion_params.f &gt; _qm2_dftb_dispersion_params.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o  
</span><br>
<span class="quotelev1">&gt; qm2_dftb_dispersion_params.o _qm2_dftb_dispersion_params.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_dispersionread.f &gt; _qm2_dftb_dispersionread.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o  
</span><br>
<span class="quotelev1">&gt; qm2_dftb_dispersionread.o _qm2_dftb_dispersionread.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_eglcao.f &gt; _qm2_dftb_eglcao.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm2_dftb_eglcao.o  
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(180) : (col. 32) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(180) : (col. 35) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(180) : (col. 32) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(180) : (col. 35) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(219) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(217) : (col. 27) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(217) : (col. 39) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(217) : (col. 27) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(217) : (col. 39) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(235) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(236) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(253) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(254) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(276) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(295) : (col. 31) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(296) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(296) : (col. 34) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(297) : (col. 21) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(297) : (col. 30) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(295) : (col. 31) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(296) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(296) : (col. 34) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(297) : (col. 21) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(297) : (col. 30) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(304) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(320) : (col. 21) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(320) : (col. 43) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(320) : (col. 21) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(320) : (col. 43) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(331) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(368) : (col. 33) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(368) : (col. 35) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(368) : (col. 37) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(368) : (col. 40) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(368) : (col. 33) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(368) : (col. 35) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(368) : (col. 37) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(368) : (col. 40) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(411) : (col. 34) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(411) : (col. 37) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(411) : (col. 34) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(411) : (col. 37) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(434) : (col. 31) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(434) : (col. 43) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(434) : (col. 60) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(434) : (col. 31) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(434) : (col. 43) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(434) : (col. 60) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(484) : (col. 37) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(483) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(484) : (col. 37) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(513) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(540) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(544) : (col. 37) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(544) : (col. 37) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(545) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(572) : (col. 18) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(572) : (col. 33) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(572) : (col. 18) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(572) : (col. 33) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(576) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(576) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(606) : (col. 21) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(606) : (col. 21) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(623) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(629) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(632) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(633) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(633) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(634) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(634) : (col. 24) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(632) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(633) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(633) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(634) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(634) : (col. 24) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(638) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(653) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(653) : (col. 37) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(653) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(653) : (col. 37) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(660) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(682) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(682) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(691) : (col. 32) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(691) : (col. 32) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(698) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(699) : (col. 26) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(699) : (col. 45) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(699) : (col. 26) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(699) : (col. 45) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(706) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(707) : (col. 24) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(707) : (col. 38) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(707) : (col. 24) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(707) : (col. 38) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(711) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(714) : (col. 21) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(714) : (col. 33) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(714) : (col. 47) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(714) : (col. 21) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(714) : (col. 33) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(714) : (col. 47) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(718) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(723) : (col. 43) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(723) : (col. 55) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(724) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(724) : (col. 31) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(723) : (col. 43) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(723) : (col. 55) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(724) : (col. 17) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(724) : (col. 31) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(67) : (col. 11) remark: eglcao_ has been  
</span><br>
<span class="quotelev1">&gt; targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(833) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_eglcao.f(809) : (col. 11) remark: qm2_dftb_ewald_corr_  
</span><br>
<span class="quotelev1">&gt; has been targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_energy.f &gt; _qm2_dftb_energy.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm2_dftb_energy.o  
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_energy.f
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_energy.f(112) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_energy.f(120) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_energy.f(120) : (col. 11) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_ewevge.f &gt; _qm2_dftb_ewevge.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0 -FR  -o qm2_dftb_ewevge.o _qm2_dftb_ewevge.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_externalchgrad.f &gt; _qm2_dftb_externalchgrad.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o  
</span><br>
<span class="quotelev1">&gt; qm2_dftb_externalchgrad.o _qm2_dftb_externalchgrad.f
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_externalchgrad.f(66) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_externalchgrad.f(68) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_externalshift.f &gt; _qm2_dftb_externalshift.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o  
</span><br>
<span class="quotelev1">&gt; qm2_dftb_externalshift.o _qm2_dftb_externalshift.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_fermi.f &gt; _qm2_dftb_fermi.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm2_dftb_fermi.o  
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_fermi.f
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_fermi.f(64) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_fermi.f(79) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_fermi.f(92) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_fermi.f(103) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_forces.f &gt; _qm2_dftb_forces.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm2_dftb_forces.o  
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_forces.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_gamma.f &gt; _qm2_dftb_gamma.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm2_dftb_gamma.o  
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_gamma.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_gammamat.f &gt; _qm2_dftb_gammamat.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o  
</span><br>
<span class="quotelev1">&gt; qm2_dftb_gammamat.o _qm2_dftb_gammamat.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_get_qmmm_forces.f &gt; _qm2_dftb_get_qmmm_forces.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o  
</span><br>
<span class="quotelev1">&gt; qm2_dftb_get_qmmm_forces.o _qm2_dftb_get_qmmm_forces.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_gettab.f &gt; _qm2_dftb_gettab.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm2_dftb_gettab.o  
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_gettab.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_load_params.f &gt; _qm2_dftb_load_params.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o  
</span><br>
<span class="quotelev1">&gt; qm2_dftb_load_params.o _qm2_dftb_load_params.f
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_load_params.f(130) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_load_params.f(288) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_load_params.f(306) : (col. 29) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_load_params.f(306) : (col. 29) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_load_params.f(320) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_load_params.f(70) : (col. 11) remark:  
</span><br>
<span class="quotelev1">&gt; qm2_dftb_load_params_ has been targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_long_range.f &gt; _qm2_dftb_long_range.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o  
</span><br>
<span class="quotelev1">&gt; qm2_dftb_long_range.o _qm2_dftb_long_range.f
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_long_range.f(138) : (col. 18) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_long_range.f(273) : (col. 18) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_long_range.f(66) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_main.f &gt; _qm2_dftb_main.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm2_dftb_main.o  
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_main.f
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_main.f(109) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_main.f(111) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_main.f(112) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_main.f(113) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_main.f(294) : (col. 46) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_main.f(294) : (col. 58) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_main.f(294) : (col. 46) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_main.f(294) : (col. 58) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_main.f(304) : (col. 21) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_main.f(306) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_main.f(304) : (col. 21) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_main.f(306) : (col. 14) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_main.f(249) : (col. 11) remark: qm2_dftb_dylcao_ has been  
</span><br>
<span class="quotelev1">&gt; targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_my_gradient.f &gt; _qm2_dftb_my_gradient.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o  
</span><br>
<span class="quotelev1">&gt; qm2_dftb_my_gradient.o _qm2_dftb_my_gradient.f
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_my_gradient.f(134) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_my_gradient.f(135) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_my_gradient.f(167) : (col. 38) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_my_gradient.f(167) : (col. 41) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_my_gradient.f(167) : (col. 38) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_my_gradient.f(167) : (col. 41) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_my_gradient.f(171) : (col. 38) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_my_gradient.f(171) : (col. 42) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_my_gradient.f(171) : (col. 38) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_my_gradient.f(171) : (col. 42) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_my_mulliken.f &gt; _qm2_dftb_my_mulliken.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o  
</span><br>
<span class="quotelev1">&gt; qm2_dftb_my_mulliken.o _qm2_dftb_my_mulliken.f
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_my_mulliken.f(112) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_my_mulliken.f(133) : (col. 38) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_my_mulliken.f(133) : (col. 49) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_my_mulliken.f(133) : (col. 38) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_my_mulliken.f(133) : (col. 49) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_my_mulliken.f(168) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_my_mulliken.f(186) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_my_mulliken.f(48) : (col. 11) remark: mulliken_ has been  
</span><br>
<span class="quotelev1">&gt; targeted for automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_repulsiv.f &gt; _qm2_dftb_repulsiv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o  
</span><br>
<span class="quotelev1">&gt; qm2_dftb_repulsiv.o _qm2_dftb_repulsiv.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_self.f &gt; _qm2_dftb_self.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm2_dftb_self.o  
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_self.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_shift.f &gt; _qm2_dftb_shift.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm2_dftb_shift.o  
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_shift.f
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_shift.f(155) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_shift.f(158) : (col. 50) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_shift.f(158) : (col. 57) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_shift.f(158) : (col. 64) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_shift.f(158) : (col. 50) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_shift.f(158) : (col. 57) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_shift.f(158) : (col. 64) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_shift.f(169) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_short_range.f &gt; _qm2_dftb_short_range.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o  
</span><br>
<span class="quotelev1">&gt; qm2_dftb_short_range.o _qm2_dftb_short_range.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_skpar.f &gt; _qm2_dftb_skpar.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm2_dftb_skpar.o  
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_skpar.f
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_skpar.f(197) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_skpar.f(181) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_skpar.f(164) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_skpar.f(138) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_skpar.f(297) : (col. 12) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_skpar.f(290) : (col. 18) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_skpar.f(283) : (col. 18) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_skpar.f(271) : (col. 15) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_slkode.f &gt; _qm2_dftb_slkode.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm2_dftb_slkode.o  
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_slkode.f
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_slkode.f(87) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_slkode.f(88) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_slkode.f(195) : (col. 5) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_slkode.f(133) : (col. 6) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_slkode.f(159) : (col. 40) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_slkode.f(159) : (col. 40) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_slkode.f(153) : (col. 40) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_slkode.f(153) : (col. 40) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_slkode.f(184) : (col. 46) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_slkode.f(184) : (col. 46) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_slkode.f(185) : (col. 46) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_slkode.f(185) : (col. 46) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_slkode.f(182) : (col. 46) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_slkode.f(182) : (col. 46) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_slkode.f(170) : (col. 40) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_slkode.f(170) : (col. 40) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_slkode.f(171) : (col. 40) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_slkode.f(171) : (col. 40) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_slktrafo.f &gt; _qm2_dftb_slktrafo.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o  
</span><br>
<span class="quotelev1">&gt; qm2_dftb_slktrafo.o _qm2_dftb_slktrafo.f
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_slktrafo.f(165) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_slktrafo.f(169) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_slktrafo.f(230) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _qm2_dftb_slktrafo.f(242) : (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; qm_div.f &gt; _qm_div.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o qm_div.o _qm_div.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; force.f &gt; _force.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP -FR  -o force.o _force.f
</span><br>
<span class="quotelev1">&gt; _force.f(956) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _force.f(1005) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _force.f(1008) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _force.f(1112) : (col. 31) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _force.f(1114) : (col. 41) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _force.f(1112) : (col. 31) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _force.f(1114) : (col. 41) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _force.f(1453) : (col. 4) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _force.f(1492) : (col. 3) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _force.f(1530) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _force.f(1532) : (col. 9) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _force.f(87) : (col. 11) remark: force_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cd ../lib; make sys.a
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/usr/local/amber9/src/lib'
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI  sys.f  
</span><br>
<span class="quotelev2">&gt; &gt; _sys.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0   -o sys.o _sys.f
</span><br>
<span class="quotelev1">&gt; gcc -c -D_FILE_OFFSET_BITS=64 -D_LARGEFILE_SOURCE -m64 -O2  -o  
</span><br>
<span class="quotelev1">&gt; wallclock.o wallclock.c
</span><br>
<span class="quotelev1">&gt; ar rv sys.a sys.o wallclock.o
</span><br>
<span class="quotelev1">&gt; ar: creating sys.a
</span><br>
<span class="quotelev1">&gt; a - sys.o
</span><br>
<span class="quotelev1">&gt; a - wallclock.o
</span><br>
<span class="quotelev1">&gt; ranlib sys.a
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/usr/local/amber9/src/lib'
</span><br>
<span class="quotelev1">&gt; cd ../lib; make nxtsec.o
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/usr/local/amber9/src/lib'
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; nxtsec.f &gt; _nxtsec.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0   -o nxtsec.o _nxtsec.f
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/usr/local/amber9/src/lib'
</span><br>
<span class="quotelev1">&gt; cd ../lapack; make
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/usr/local/amber9/src/lapack'
</span><br>
<span class="quotelev1">&gt; Makefile:7: warning: overriding commands for target `.f.o'
</span><br>
<span class="quotelev1">&gt; ../config.h:82: warning: ignoring old commands for target `.f.o'
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dsyev.f &gt; _dsyev.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dsyev.o _dsyev.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dsygv.f &gt; _dsygv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dsygv.o _dsygv.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlansy.f &gt; _dlansy.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlansy.o _dlansy.f
</span><br>
<span class="quotelev1">&gt; _dlansy.f(138) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlansy.f(143) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlansy.f(127) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlansy.f(134) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlansy.f(113) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlansy.f(107) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlansy.f(3) : (col. 32) remark: dlansy_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dsytrd.f &gt; _dsytrd.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dsytrd.o _dsytrd.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dorgtr.f &gt; _dorgtr.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dorgtr.o _dorgtr.f
</span><br>
<span class="quotelev1">&gt; _dorgtr.f(165) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dorgtr.f(170) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dorgtr.f(141) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dorgtr.f(146) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dsteqr.f &gt; _dsteqr.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dsteqr.o _dsteqr.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dsterf.f &gt; _dsterf.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dsterf.o _dsterf.f
</span><br>
<span class="quotelev1">&gt; _dsterf.f(149) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlascl.f &gt; _dlascl.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlascl.o _dlascl.f
</span><br>
<span class="quotelev1">&gt; _dlascl.f(256) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlascl.f(242) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlascl.f(230) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlascl.f(218) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlascl.f(208) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlascl.f(198) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlascl.f(188) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlamch.f &gt; _dlamch.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -O0   -o dlamch.o _dlamch.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; xerbla.f &gt; _xerbla.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o xerbla.o _xerbla.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; ilaenv.f &gt; _ilaenv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o ilaenv.o _ilaenv.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlassq.f &gt; _dlassq.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlassq.o _dlassq.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dsytd2.f &gt; _dsytd2.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dsytd2.o _dsytd2.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlatrd.f &gt; _dlatrd.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlatrd.o _dlatrd.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dorgql.f &gt; _dorgql.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dorgql.o _dorgql.f
</span><br>
<span class="quotelev1">&gt; _dorgql.f(162) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dorgql.f(204) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dorgqr.f &gt; _dorgqr.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dorgqr.o _dorgqr.f
</span><br>
<span class="quotelev1">&gt; _dorgqr.f(163) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dorgqr.f(207) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlasrt.f &gt; _dlasrt.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlasrt.o _dlasrt.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlaset.f &gt; _dlaset.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlaset.o _dlaset.f
</span><br>
<span class="quotelev1">&gt; _dlaset.f(101) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaset.f(91) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaset.f(80) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlanst.f &gt; _dlanst.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlanst.o _dlanst.f
</span><br>
<span class="quotelev1">&gt; _dlanst.f(103) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlaev2.f &gt; _dlaev2.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlaev2.o _dlaev2.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlasr.f &gt; _dlasr.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlasr.o _dlasr.f
</span><br>
<span class="quotelev1">&gt; _dlasr.f(312) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlasr.f(300) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlasr.f(286) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlasr.f(274) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlasr.f(260) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlasr.f(248) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlapy2.f &gt; _dlapy2.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlapy2.o _dlapy2.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlartg.f &gt; _dlartg.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlartg.o _dlartg.f
</span><br>
<span class="quotelev1">&gt; _dlartg.f(127) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlartg.f(112) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlae2.f &gt; _dlae2.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlae2.o _dlae2.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dorg2r.f &gt; _dorg2r.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dorg2r.o _dorg2r.f
</span><br>
<span class="quotelev1">&gt; _dorg2r.f(103) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dorg2r.f(124) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlarft.f &gt; _dlarft.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlarft.o _dlarft.f
</span><br>
<span class="quotelev1">&gt; _dlarft.f(175) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlarft.f(136) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlarfb.f &gt; _dlarfb.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlarfb.o _dlarfb.f
</span><br>
<span class="quotelev1">&gt; _dlarfb.f(576) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlarfb.f(464) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlarfb.f(346) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlarfb.f(234) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dorg2l.f &gt; _dorg2l.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dorg2l.o _dorg2l.f
</span><br>
<span class="quotelev1">&gt; _dorg2l.f(103) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dorg2l.f(122) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlarfg.f &gt; _dlarfg.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlarfg.o _dlarfg.f
</span><br>
<span class="quotelev1">&gt; _dlarfg.f(126) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlarf.f &gt; _dlarf.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlarf.o _dlarf.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dspev.f &gt; _dspev.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dspev.o _dspev.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlansp.f &gt; _dlansp.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlansp.o _dlansp.f
</span><br>
<span class="quotelev1">&gt; _dlansp.f(140) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlansp.f(146) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlansp.f(127) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlansp.f(136) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlansp.f(111) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlansp.f(103) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlansp.f(3) : (col. 32) remark: dlansp_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dsptrd.f &gt; _dsptrd.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dsptrd.o _dsptrd.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dopgtr.f &gt; _dopgtr.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dopgtr.o _dopgtr.f
</span><br>
<span class="quotelev1">&gt; _dopgtr.f(139) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dopgtr.f(145) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dopgtr.f(114) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dopgtr.f(121) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dppsv.f &gt; _dppsv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dppsv.o _dppsv.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dspsv.f &gt; _dspsv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dspsv.o _dspsv.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dgeev.f &gt; _dgeev.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dgeev.o _dgeev.f
</span><br>
<span class="quotelev1">&gt; _dgeev.f(349) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dgeev.f(379) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dsptrs.f &gt; _dsptrs.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dsptrs.o _dsptrs.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dsptrf.f &gt; _dsptrf.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dsptrf.o _dsptrf.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dpptrs.f &gt; _dpptrs.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dpptrs.o _dpptrs.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dpptrf.f &gt; _dpptrf.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dpptrf.o _dpptrf.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dgebak.f &gt; _dgebak.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dgebak.o _dgebak.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dtrevc.f &gt; _dtrevc.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dtrevc.o _dtrevc.f
</span><br>
<span class="quotelev1">&gt; _dtrevc.f(287) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrevc.f(614) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrevc.f(585) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrevc.f(594) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrevc.f(343) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrevc.f(439) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrevc.f(978) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrevc.f(952) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrevc.f(960) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrevc.f(784) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrevc.f(3) : (col. 17) remark: dtrevc_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlacpy.f &gt; _dlacpy.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlacpy.o _dlacpy.f
</span><br>
<span class="quotelev1">&gt; _dlacpy.f(81) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlacpy.f(75) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlacpy.f(69) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dhseqr.f &gt; _dhseqr.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dhseqr.o _dhseqr.f
</span><br>
<span class="quotelev1">&gt; _dhseqr.f(191) : (col. 10) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dhseqr.f(214) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dhseqr.f(345) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dhseqr.f(383) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dhseqr.f(412) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dorghr.f &gt; _dorghr.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dorghr.o _dorghr.f
</span><br>
<span class="quotelev1">&gt; _dorghr.f(132) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dorghr.f(135) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dorghr.f(138) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dorghr.f(143) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dorghr.f(149) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dgehrd.f &gt; _dgehrd.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dgehrd.o _dgehrd.f
</span><br>
<span class="quotelev1">&gt; _dgehrd.f(159) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dgehrd.f(162) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dgebal.f &gt; _dgebal.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dgebal.o _dgebal.f
</span><br>
<span class="quotelev1">&gt; _dgebal.f(228) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dgebal.f(157) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlange.f &gt; _dlange.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlange.o _dlange.f
</span><br>
<span class="quotelev1">&gt; _dlange.f(109) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlange.f(118) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlange.f(122) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlange.f(127) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlange.f(98) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlange.f(3) : (col. 32) remark: dlange_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlabad.f &gt; _dlabad.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlabad.o _dlabad.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlahqr.f &gt; _dlahqr.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlahqr.o _dlahqr.f
</span><br>
<span class="quotelev1">&gt; _dlahqr.f(363) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlahqr.f(373) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlahqr.f(331) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlahqr.f(342) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlarfx.f &gt; _dlarfx.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlarfx.o _dlarfx.f
</span><br>
<span class="quotelev1">&gt; _dlarfx.f(618) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlarfx.f(579) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlarfx.f(543) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlarfx.f(510) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlarfx.f(481) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlarfx.f(455) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlarfx.f(432) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlarfx.f(413) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlarfx.f(397) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlarfx.f(385) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlanhs.f &gt; _dlanhs.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlanhs.o _dlanhs.f
</span><br>
<span class="quotelev1">&gt; _dlanhs.f(106) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlanhs.f(115) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlanhs.f(119) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlanhs.f(124) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlanhs.f(95) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlanhs.f(3) : (col. 32) remark: dlanhs_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlaln2.f &gt; _dlaln2.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlaln2.o _dlaln2.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dgehd2.f &gt; _dgehd2.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dgehd2.o _dgehd2.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlahrd.f &gt; _dlahrd.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlahrd.o _dlahrd.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlanv2.f &gt; _dlanv2.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlanv2.o _dlanv2.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dladiv.f &gt; _dladiv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dladiv.o _dladiv.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dgerq2.f &gt; _dgerq2.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dgerq2.o _dgerq2.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dorm2r.f &gt; _dorm2r.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dorm2r.o _dorm2r.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlarnv.f &gt; _dlarnv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlarnv.o _dlarnv.f
</span><br>
<span class="quotelev1">&gt; _dlarnv.f(101) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlarnv.f(94) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dgeqr2.f &gt; _dgeqr2.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dgeqr2.o _dgeqr2.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlaruv.f &gt; _dlaruv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlaruv.o _dlaruv.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dspevd.f &gt; _dspevd.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dspevd.o _dspevd.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dstedc.f &gt; _dstedc.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dstedc.o _dstedc.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dopmtr.f &gt; _dopmtr.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dopmtr.o _dopmtr.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlaed0.f &gt; _dlaed0.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlaed0.o _dlaed0.f
</span><br>
<span class="quotelev1">&gt; _dlaed0.f(255) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlaed1.f &gt; _dlaed1.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlaed1.o _dlaed1.f
</span><br>
<span class="quotelev1">&gt; _dlaed1.f(188) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlaed7.f &gt; _dlaed7.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlaed7.o _dlaed7.f
</span><br>
<span class="quotelev1">&gt; _dlaed7.f(280) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlaeda.f &gt; _dlaeda.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlaeda.o _dlaeda.f
</span><br>
<span class="quotelev1">&gt; _dlaeda.f(149) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaeda.f(155) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlaed8.f &gt; _dlaed8.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlaed8.o _dlaed8.f
</span><br>
<span class="quotelev1">&gt; _dlaed8.f(210) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed8.f(218) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlaed9.f &gt; _dlaed9.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlaed9.o _dlaed9.f
</span><br>
<span class="quotelev1">&gt; _dlaed9.f(165) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed9.f(180) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed9.f(183) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed9.f(187) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed9.f(194) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed9.f(198) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlamrg.f &gt; _dlamrg.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlamrg.o _dlamrg.f
</span><br>
<span class="quotelev1">&gt; _dlamrg.f(95) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlamrg.f(88) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlaed2.f &gt; _dlaed2.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlaed2.o _dlaed2.f
</span><br>
<span class="quotelev1">&gt; _dlaed2.f(200) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed2.f(245) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed2.f(248) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed2.f(349) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlaed3.f &gt; _dlaed3.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlaed3.o _dlaed3.f
</span><br>
<span class="quotelev1">&gt; _dlaed3.f(212) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed3.f(215) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed3.f(219) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed3.f(226) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dpotrf.f &gt; _dpotrf.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dpotrf.o _dpotrf.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dsygst.f &gt; _dsygst.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dsygst.o _dsygst.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dpotf2.f &gt; _dpotf2.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dpotf2.o _dpotf2.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dsygs2.f &gt; _dsygs2.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dsygs2.o _dsygs2.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlaebz.f &gt; _dlaebz.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlaebz.o _dlaebz.f
</span><br>
<span class="quotelev1">&gt; _dlaebz.f(292) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaebz.f(533) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlagtf.f &gt; _dlagtf.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlagtf.o _dlagtf.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlagts.f &gt; _dlagts.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlagts.o _dlagts.f
</span><br>
<span class="quotelev1">&gt; _dlagts.f(147) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dormqr.f &gt; _dormqr.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dormqr.o _dormqr.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dormql.f &gt; _dormql.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dormql.o _dormql.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dorm2l.f &gt; _dorm2l.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dorm2l.o _dorm2l.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlaed4.f &gt; _dlaed4.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlaed4.o _dlaed4.f
</span><br>
<span class="quotelev1">&gt; _dlaed4.f(414) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed4.f(419) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed4.f(424) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed4.f(470) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed4.f(466) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed4.f(625) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed4.f(789) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed4.f(163) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed4.f(168) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed4.f(214) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed4.f(289) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed4.f(365) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dlaed4.f(3) : (col. 17) remark: dlaed4_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlaed5.f &gt; _dlaed5.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlaed5.o _dlaed5.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlaed6.f &gt; _dlaed6.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlaed6.o _dlaed6.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; ieeeck.f &gt; _ieeeck.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o ieeeck.o _ieeeck.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dsyevx.f &gt; _dsyevx.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dsyevx.o _dsyevx.f
</span><br>
<span class="quotelev1">&gt; _dsyevx.f(332) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dsyevd.f &gt; _dsyevd.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dsyevd.o _dsyevd.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dstebz.f &gt; _dstebz.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dstebz.o _dstebz.f
</span><br>
<span class="quotelev1">&gt; _dstebz.f(401) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dstebz.f(531) : (col. 19) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dstebz.f(531) : (col. 19) remark: PARTIAL LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dstein.f &gt; _dstein.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dstein.o _dstein.f
</span><br>
<span class="quotelev1">&gt; _dstein.f(139) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dstein.f(184) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dstein.f(218) : (col. 13) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dstein.f(345) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dstein.f(348) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dormtr.f &gt; _dormtr.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dormtr.o _dormtr.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zheev.f &gt; _zheev.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zheev.o _zheev.f
</span><br>
<span class="quotelev1">&gt; _zheev.f(3) : (col. 17) remark: zheev_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; lsame.f &gt; _lsame.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o lsame.o _lsame.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zlanhe.f &gt; _zlanhe.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zlanhe.o _zlanhe.f
</span><br>
<span class="quotelev1">&gt; _zlanhe.f(142) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _zlanhe.f(138) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _zlanhe.f(3) : (col. 32) remark: zlanhe_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zlascl.f &gt; _zlascl.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zlascl.o _zlascl.f
</span><br>
<span class="quotelev1">&gt; _zlascl.f(3) : (col. 17) remark: zlascl_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zhetrd.f &gt; _zhetrd.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zhetrd.o _zhetrd.f
</span><br>
<span class="quotelev1">&gt; _zhetrd.f(3) : (col. 17) remark: zhetrd_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zungtr.f &gt; _zungtr.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zungtr.o _zungtr.f
</span><br>
<span class="quotelev1">&gt; _zungtr.f(3) : (col. 17) remark: zungtr_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zsteqr.f &gt; _zsteqr.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zsteqr.o _zsteqr.f
</span><br>
<span class="quotelev1">&gt; _zsteqr.f(3) : (col. 17) remark: zsteqr_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zlassq.f &gt; _zlassq.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zlassq.o _zlassq.f
</span><br>
<span class="quotelev1">&gt; _zlassq.f(3) : (col. 17) remark: zlassq_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zlatrd.f &gt; _zlatrd.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zlatrd.o _zlatrd.f
</span><br>
<span class="quotelev1">&gt; _zlatrd.f(3) : (col. 17) remark: zlatrd_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zhetd2.f &gt; _zhetd2.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zhetd2.o _zhetd2.f
</span><br>
<span class="quotelev1">&gt; _zhetd2.f(3) : (col. 17) remark: zhetd2_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zungql.f &gt; _zungql.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zungql.o _zungql.f
</span><br>
<span class="quotelev1">&gt; _zungql.f(3) : (col. 17) remark: zungql_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zungqr.f &gt; _zungqr.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zungqr.o _zungqr.f
</span><br>
<span class="quotelev1">&gt; _zungqr.f(3) : (col. 17) remark: zungqr_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zlasr.f &gt; _zlasr.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zlasr.o _zlasr.f
</span><br>
<span class="quotelev1">&gt; _zlasr.f(3) : (col. 17) remark: zlasr_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zlaset.f &gt; _zlaset.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zlaset.o _zlaset.f
</span><br>
<span class="quotelev1">&gt; _zlaset.f(3) : (col. 17) remark: zlaset_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zlacgv.f &gt; _zlacgv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zlacgv.o _zlacgv.f
</span><br>
<span class="quotelev1">&gt; _zlacgv.f(3) : (col. 17) remark: zlacgv_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zlarfg.f &gt; _zlarfg.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zlarfg.o _zlarfg.f
</span><br>
<span class="quotelev1">&gt; _zlarfg.f(3) : (col. 17) remark: zlarfg_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zung2l.f &gt; _zung2l.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zung2l.o _zung2l.f
</span><br>
<span class="quotelev1">&gt; _zung2l.f(3) : (col. 17) remark: zung2l_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zlarft.f &gt; _zlarft.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zlarft.o _zlarft.f
</span><br>
<span class="quotelev1">&gt; _zlarft.f(3) : (col. 17) remark: zlarft_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zlarfb.f &gt; _zlarfb.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zlarfb.o _zlarfb.f
</span><br>
<span class="quotelev1">&gt; _zlarfb.f(3) : (col. 17) remark: zlarfb_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zung2r.f &gt; _zung2r.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zung2r.o _zung2r.f
</span><br>
<span class="quotelev1">&gt; _zung2r.f(3) : (col. 17) remark: zung2r_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dlapy3.f &gt; _dlapy3.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dlapy3.o _dlapy3.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zladiv.f &gt; _zladiv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zladiv.o _zladiv.f
</span><br>
<span class="quotelev1">&gt; _zladiv.f(3) : (col. 32) remark: zladiv_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zlarf.f &gt; _zlarf.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zlarf.o _zlarf.f
</span><br>
<span class="quotelev1">&gt; _zlarf.f(3) : (col. 17) remark: zlarf_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; ar rv lapack.a dsyev.o dsygv.o dlansy.o dsytrd.o dorgtr.o dsteqr.o  
</span><br>
<span class="quotelev1">&gt; dsterf.o dlascl.o dlamch.o xerbla.o ilaenv.o dlassq.o dsytd2.o  
</span><br>
<span class="quotelev1">&gt; dlatrd.o dorgql.o dorgqr.o dlasrt.o dlaset.o dlanst.o dlaev2.o  
</span><br>
<span class="quotelev1">&gt; dlasr.o dlapy2.o dlartg.o dlae2.o dorg2r.o dlarft.o dlarfb.o  
</span><br>
<span class="quotelev1">&gt; dorg2l.o dlarfg.o dlarf.o dspev.o dlansp.o dsptrd.o dopgtr.o  
</span><br>
<span class="quotelev1">&gt; dppsv.o dspsv.o dgeev.o dsptrs.o dsptrf.o dpptrs.o dpptrf.o  
</span><br>
<span class="quotelev1">&gt; dgebak.o dtrevc.o dlacpy.o dhseqr.o dorghr.o dgehrd.o dgebal.o  
</span><br>
<span class="quotelev1">&gt; dlange.o dlabad.o dlahqr.o dlarfx.o dlanhs.o dlaln2.o dgehd2.o  
</span><br>
<span class="quotelev1">&gt; dlahrd.o dlanv2.o dladiv.o dgerq2.o dorm2r.o dlarnv.o dgeqr2.o  
</span><br>
<span class="quotelev1">&gt; dlaruv.o dspevd.o dstedc.o dopmtr.o dlaed0.o dlaed1.o dlaed7.o  
</span><br>
<span class="quotelev1">&gt; dlaeda.o dlaed8.o dlaed9.o dlamrg.o dlaed2.o dlaed3.o dpotrf.o  
</span><br>
<span class="quotelev1">&gt; dsygst.o dpotf2.o dsygs2.o dlaebz.o dlagtf.o dlagts.o dormqr.o  
</span><br>
<span class="quotelev1">&gt; dormql.o dorm2l.o dlaed4.o dlaed5.o dlaed6.o ieeeck.o dsyevx.o  
</span><br>
<span class="quotelev1">&gt; dsyevd.o dstebz.o dstein.o dormtr.o zheev.o lsame.o zlanhe.o  
</span><br>
<span class="quotelev1">&gt; zlascl.o zhetrd.o zungtr.o zsteqr.o zlassq.o zlatrd.o zhetd2.o  
</span><br>
<span class="quotelev1">&gt; zungql.o zungqr.o zlasr.o zlaset.o zlacgv.o zlarf!
</span><br>
<span class="quotelev1">&gt;  g.o zung2l.o zlarft.o zlarfb.o zung2r.o dlapy3.o zladiv.o zlarf.o
</span><br>
<span class="quotelev1">&gt; ar: creating lapack.a
</span><br>
<span class="quotelev1">&gt; a - dsyev.o
</span><br>
<span class="quotelev1">&gt; a - dsygv.o
</span><br>
<span class="quotelev1">&gt; a - dlansy.o
</span><br>
<span class="quotelev1">&gt; a - dsytrd.o
</span><br>
<span class="quotelev1">&gt; a - dorgtr.o
</span><br>
<span class="quotelev1">&gt; a - dsteqr.o
</span><br>
<span class="quotelev1">&gt; a - dsterf.o
</span><br>
<span class="quotelev1">&gt; a - dlascl.o
</span><br>
<span class="quotelev1">&gt; a - dlamch.o
</span><br>
<span class="quotelev1">&gt; a - xerbla.o
</span><br>
<span class="quotelev1">&gt; a - ilaenv.o
</span><br>
<span class="quotelev1">&gt; a - dlassq.o
</span><br>
<span class="quotelev1">&gt; a - dsytd2.o
</span><br>
<span class="quotelev1">&gt; a - dlatrd.o
</span><br>
<span class="quotelev1">&gt; a - dorgql.o
</span><br>
<span class="quotelev1">&gt; a - dorgqr.o
</span><br>
<span class="quotelev1">&gt; a - dlasrt.o
</span><br>
<span class="quotelev1">&gt; a - dlaset.o
</span><br>
<span class="quotelev1">&gt; a - dlanst.o
</span><br>
<span class="quotelev1">&gt; a - dlaev2.o
</span><br>
<span class="quotelev1">&gt; a - dlasr.o
</span><br>
<span class="quotelev1">&gt; a - dlapy2.o
</span><br>
<span class="quotelev1">&gt; a - dlartg.o
</span><br>
<span class="quotelev1">&gt; a - dlae2.o
</span><br>
<span class="quotelev1">&gt; a - dorg2r.o
</span><br>
<span class="quotelev1">&gt; a - dlarft.o
</span><br>
<span class="quotelev1">&gt; a - dlarfb.o
</span><br>
<span class="quotelev1">&gt; a - dorg2l.o
</span><br>
<span class="quotelev1">&gt; a - dlarfg.o
</span><br>
<span class="quotelev1">&gt; a - dlarf.o
</span><br>
<span class="quotelev1">&gt; a - dspev.o
</span><br>
<span class="quotelev1">&gt; a - dlansp.o
</span><br>
<span class="quotelev1">&gt; a - dsptrd.o
</span><br>
<span class="quotelev1">&gt; a - dopgtr.o
</span><br>
<span class="quotelev1">&gt; a - dppsv.o
</span><br>
<span class="quotelev1">&gt; a - dspsv.o
</span><br>
<span class="quotelev1">&gt; a - dgeev.o
</span><br>
<span class="quotelev1">&gt; a - dsptrs.o
</span><br>
<span class="quotelev1">&gt; a - dsptrf.o
</span><br>
<span class="quotelev1">&gt; a - dpptrs.o
</span><br>
<span class="quotelev1">&gt; a - dpptrf.o
</span><br>
<span class="quotelev1">&gt; a - dgebak.o
</span><br>
<span class="quotelev1">&gt; a - dtrevc.o
</span><br>
<span class="quotelev1">&gt; a - dlacpy.o
</span><br>
<span class="quotelev1">&gt; a - dhseqr.o
</span><br>
<span class="quotelev1">&gt; a - dorghr.o
</span><br>
<span class="quotelev1">&gt; a - dgehrd.o
</span><br>
<span class="quotelev1">&gt; a - dgebal.o
</span><br>
<span class="quotelev1">&gt; a - dlange.o
</span><br>
<span class="quotelev1">&gt; a - dlabad.o
</span><br>
<span class="quotelev1">&gt; a - dlahqr.o
</span><br>
<span class="quotelev1">&gt; a - dlarfx.o
</span><br>
<span class="quotelev1">&gt; a - dlanhs.o
</span><br>
<span class="quotelev1">&gt; a - dlaln2.o
</span><br>
<span class="quotelev1">&gt; a - dgehd2.o
</span><br>
<span class="quotelev1">&gt; a - dlahrd.o
</span><br>
<span class="quotelev1">&gt; a - dlanv2.o
</span><br>
<span class="quotelev1">&gt; a - dladiv.o
</span><br>
<span class="quotelev1">&gt; a - dgerq2.o
</span><br>
<span class="quotelev1">&gt; a - dorm2r.o
</span><br>
<span class="quotelev1">&gt; a - dlarnv.o
</span><br>
<span class="quotelev1">&gt; a - dgeqr2.o
</span><br>
<span class="quotelev1">&gt; a - dlaruv.o
</span><br>
<span class="quotelev1">&gt; a - dspevd.o
</span><br>
<span class="quotelev1">&gt; a - dstedc.o
</span><br>
<span class="quotelev1">&gt; a - dopmtr.o
</span><br>
<span class="quotelev1">&gt; a - dlaed0.o
</span><br>
<span class="quotelev1">&gt; a - dlaed1.o
</span><br>
<span class="quotelev1">&gt; a - dlaed7.o
</span><br>
<span class="quotelev1">&gt; a - dlaeda.o
</span><br>
<span class="quotelev1">&gt; a - dlaed8.o
</span><br>
<span class="quotelev1">&gt; a - dlaed9.o
</span><br>
<span class="quotelev1">&gt; a - dlamrg.o
</span><br>
<span class="quotelev1">&gt; a - dlaed2.o
</span><br>
<span class="quotelev1">&gt; a - dlaed3.o
</span><br>
<span class="quotelev1">&gt; a - dpotrf.o
</span><br>
<span class="quotelev1">&gt; a - dsygst.o
</span><br>
<span class="quotelev1">&gt; a - dpotf2.o
</span><br>
<span class="quotelev1">&gt; a - dsygs2.o
</span><br>
<span class="quotelev1">&gt; a - dlaebz.o
</span><br>
<span class="quotelev1">&gt; a - dlagtf.o
</span><br>
<span class="quotelev1">&gt; a - dlagts.o
</span><br>
<span class="quotelev1">&gt; a - dormqr.o
</span><br>
<span class="quotelev1">&gt; a - dormql.o
</span><br>
<span class="quotelev1">&gt; a - dorm2l.o
</span><br>
<span class="quotelev1">&gt; a - dlaed4.o
</span><br>
<span class="quotelev1">&gt; a - dlaed5.o
</span><br>
<span class="quotelev1">&gt; a - dlaed6.o
</span><br>
<span class="quotelev1">&gt; a - ieeeck.o
</span><br>
<span class="quotelev1">&gt; a - dsyevx.o
</span><br>
<span class="quotelev1">&gt; a - dsyevd.o
</span><br>
<span class="quotelev1">&gt; a - dstebz.o
</span><br>
<span class="quotelev1">&gt; a - dstein.o
</span><br>
<span class="quotelev1">&gt; a - dormtr.o
</span><br>
<span class="quotelev1">&gt; a - zheev.o
</span><br>
<span class="quotelev1">&gt; a - lsame.o
</span><br>
<span class="quotelev1">&gt; a - zlanhe.o
</span><br>
<span class="quotelev1">&gt; a - zlascl.o
</span><br>
<span class="quotelev1">&gt; a - zhetrd.o
</span><br>
<span class="quotelev1">&gt; a - zungtr.o
</span><br>
<span class="quotelev1">&gt; a - zsteqr.o
</span><br>
<span class="quotelev1">&gt; a - zlassq.o
</span><br>
<span class="quotelev1">&gt; a - zlatrd.o
</span><br>
<span class="quotelev1">&gt; a - zhetd2.o
</span><br>
<span class="quotelev1">&gt; a - zungql.o
</span><br>
<span class="quotelev1">&gt; a - zungqr.o
</span><br>
<span class="quotelev1">&gt; a - zlasr.o
</span><br>
<span class="quotelev1">&gt; a - zlaset.o
</span><br>
<span class="quotelev1">&gt; a - zlacgv.o
</span><br>
<span class="quotelev1">&gt; a - zlarfg.o
</span><br>
<span class="quotelev1">&gt; a - zung2l.o
</span><br>
<span class="quotelev1">&gt; a - zlarft.o
</span><br>
<span class="quotelev1">&gt; a - zlarfb.o
</span><br>
<span class="quotelev1">&gt; a - zung2r.o
</span><br>
<span class="quotelev1">&gt; a - dlapy3.o
</span><br>
<span class="quotelev1">&gt; a - zladiv.o
</span><br>
<span class="quotelev1">&gt; a - zlarf.o
</span><br>
<span class="quotelev1">&gt; ranlib lapack.a
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/usr/local/amber9/src/lapack'
</span><br>
<span class="quotelev1">&gt; cd ../blas; make
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/usr/local/amber9/src/blas'
</span><br>
<span class="quotelev1">&gt; Makefile:7: warning: overriding commands for target `.f.o'
</span><br>
<span class="quotelev1">&gt; ../config.h:82: warning: ignoring old commands for target `.f.o'
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dasum.f &gt; _dasum.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dasum.o _dasum.f
</span><br>
<span class="quotelev1">&gt; _dasum.f(39) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dasum.f(3) : (col. 32) remark: dasum_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; daxpy.f &gt; _daxpy.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o daxpy.o _daxpy.f
</span><br>
<span class="quotelev1">&gt; _daxpy.f(43) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dcabs1.f &gt; _dcabs1.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dcabs1.o _dcabs1.f
</span><br>
<span class="quotelev1">&gt; _dcabs1.f(3) : (col. 32) remark: dcabs1_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dcopy.f &gt; _dcopy.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dcopy.o _dcopy.f
</span><br>
<span class="quotelev1">&gt; _dcopy.f(42) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; ddot.f &gt; _ddot.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o ddot.o _ddot.f
</span><br>
<span class="quotelev1">&gt; _ddot.f(45) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ddot.f(3) : (col. 32) remark: ddot_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dgbmv.f &gt; _dgbmv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dgbmv.o _dgbmv.f
</span><br>
<span class="quotelev1">&gt; _dgbmv.f(212) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dgbmv.f(208) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dgbmv.f(275) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dgbmv.f(244) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dgbmv.f(3) : (col. 17) remark: dgbmv_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dgemm.f &gt; _dgemm.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dgemm.o _dgemm.f
</span><br>
<span class="quotelev1">&gt; _dgemm.f(278) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dgemm.f(274) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dgemm.f(285) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dgemm.f(256) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dgemm.f(236) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dgemm.f(232) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dgemm.f(243) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dgemm.f(215) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dgemm.f(209) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dgemm.f(3) : (col. 17) remark: dgemm_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dgemv.f &gt; _dgemv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dgemv.o _dgemv.f
</span><br>
<span class="quotelev1">&gt; _dgemv.f(182) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dgemv.f(178) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dgemv.f(239) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dgemv.f(212) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dgemv.f(3) : (col. 17) remark: dgemv_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dger.f &gt; _dger.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dger.o _dger.f
</span><br>
<span class="quotelev1">&gt; _dger.f(130) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dnrm2.f &gt; _dnrm2.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dnrm2.o _dnrm2.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; drot.f &gt; _drot.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o drot.o _drot.f
</span><br>
<span class="quotelev1">&gt; _drot.f(33) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; drotg.f &gt; _drotg.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o drotg.o _drotg.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dsbmv.f &gt; _dsbmv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dsbmv.o _dsbmv.f
</span><br>
<span class="quotelev1">&gt; _dsbmv.f(201) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsbmv.f(197) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsbmv.f(272) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsbmv.f(232) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsbmv.f(3) : (col. 17) remark: dsbmv_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dscal.f &gt; _dscal.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dscal.o _dscal.f
</span><br>
<span class="quotelev1">&gt; _dscal.f(37) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dspmv.f &gt; _dspmv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dspmv.o _dspmv.f
</span><br>
<span class="quotelev1">&gt; _dspmv.f(160) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dspmv.f(156) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dspmv.f(229) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dspmv.f(191) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dspmv.f(3) : (col. 17) remark: dspmv_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dspr.f &gt; _dspr.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dspr.o _dspr.f
</span><br>
<span class="quotelev1">&gt; _dspr.f(172) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dspr.f(141) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dspr2.f &gt; _dspr2.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dspr2.o _dspr2.f
</span><br>
<span class="quotelev1">&gt; _dspr2.f(200) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dspr2.f(165) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dswap.f &gt; _dswap.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dswap.o _dswap.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dsymm.f &gt; _dsymm.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dsymm.o _dsymm.f
</span><br>
<span class="quotelev1">&gt; _dsymm.f(265) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsymm.f(261) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsymm.f(275) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsymm.f(285) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsymm.f(241) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsymm.f(224) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsymm.f(205) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsymm.f(199) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsymm.f(3) : (col. 17) remark: dsymm_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dsymv.f &gt; _dsymv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dsymv.o _dsymv.f
</span><br>
<span class="quotelev1">&gt; _dsymv.f(169) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsymv.f(165) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsymv.f(232) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsymv.f(198) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsymv.f(3) : (col. 17) remark: dsymv_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dsyr.f &gt; _dsyr.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dsyr.o _dsyr.f
</span><br>
<span class="quotelev1">&gt; _dsyr.f(174) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyr.f(147) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dsyr2.f &gt; _dsyr2.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dsyr2.o _dsyr2.f
</span><br>
<span class="quotelev1">&gt; _dsyr2.f(203) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyr2.f(171) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dsyr2k.f &gt; _dsyr2k.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dsyr2k.o _dsyr2k.f
</span><br>
<span class="quotelev1">&gt; _dsyr2k.f(310) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyr2k.f(293) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyr2k.f(267) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyr2k.f(263) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyr2k.f(276) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyr2k.f(244) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyr2k.f(240) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyr2k.f(253) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyr2k.f(222) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyr2k.f(216) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyr2k.f(208) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyr2k.f(202) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyr2k.f(3) : (col. 17) remark: dsyr2k_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dsyrk.f &gt; _dsyrk.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dsyrk.o _dsyrk.f
</span><br>
<span class="quotelev1">&gt; _dsyrk.f(279) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyrk.f(265) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyrk.f(243) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyrk.f(239) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyrk.f(250) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyrk.f(223) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyrk.f(219) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyrk.f(230) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyrk.f(201) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyrk.f(195) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyrk.f(187) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyrk.f(181) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dsyrk.f(3) : (col. 17) remark: dsyrk_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dtbmv.f &gt; _dtbmv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dtbmv.o _dtbmv.f
</span><br>
<span class="quotelev1">&gt; _dtbmv.f(315) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtbmv.f(285) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtbmv.f(213) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtbmv.f(3) : (col. 17) remark: dtbmv_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dtbsv.f &gt; _dtbsv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dtbsv.o _dtbsv.f
</span><br>
<span class="quotelev1">&gt; _dtbsv.f(315) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtbsv.f(285) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtbsv.f(251) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtbsv.f(219) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtbsv.f(3) : (col. 17) remark: dtbsv_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dtpmv.f &gt; _dtpmv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dtpmv.o _dtpmv.f
</span><br>
<span class="quotelev1">&gt; _dtpmv.f(271) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtpmv.f(240) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtpmv.f(200) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtpmv.f(167) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtpmv.f(3) : (col. 17) remark: dtpmv_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dtpsv.f &gt; _dtpsv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dtpsv.o _dtpsv.f
</span><br>
<span class="quotelev1">&gt; _dtpsv.f(271) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtpsv.f(240) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtpsv.f(205) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtpsv.f(172) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtpsv.f(3) : (col. 17) remark: dtpsv_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dtrmm.f &gt; _dtrmm.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dtrmm.o _dtrmm.f
</span><br>
<span class="quotelev1">&gt; _dtrmm.f(335) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrmm.f(344) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrmm.f(316) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrmm.f(325) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrmm.f(294) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrmm.f(300) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrmm.f(277) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrmm.f(283) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrmm.f(259) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrmm.f(247) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrmm.f(230) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrmm.f(213) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrmm.f(194) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrmm.f(3) : (col. 17) remark: dtrmm_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dtrmv.f &gt; _dtrmv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dtrmv.o _dtrmv.f
</span><br>
<span class="quotelev1">&gt; _dtrmv.f(261) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrmv.f(235) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrmv.f(200) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrmv.f(172) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrmv.f(3) : (col. 17) remark: dtrmv_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dtrsm.f &gt; _dtrsm.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dtrsm.o _dtrsm.f
</span><br>
<span class="quotelev1">&gt; _dtrsm.f(354) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrsm.f(361) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrsm.f(367) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrsm.f(332) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrsm.f(339) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrsm.f(345) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrsm.f(305) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrsm.f(311) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrsm.f(318) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrsm.f(284) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrsm.f(290) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrsm.f(297) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrsm.f(266) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrsm.f(254) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrsm.f(231) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrsm.f(239) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrsm.f(214) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrsm.f(222) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrsm.f(197) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrsm.f(3) : (col. 17) remark: dtrsm_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dtrsv.f &gt; _dtrsv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dtrsv.o _dtrsv.f
</span><br>
<span class="quotelev1">&gt; _dtrsv.f(261) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrsv.f(235) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrsv.f(205) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrsv.f(177) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _dtrsv.f(3) : (col. 17) remark: dtrsv_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dummy.f &gt; _dummy.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dummy.o _dummy.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dzasum.f &gt; _dzasum.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dzasum.o _dzasum.f
</span><br>
<span class="quotelev1">&gt; _dzasum.f(3) : (col. 32) remark: dzasum_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; dznrm2.f &gt; _dznrm2.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o dznrm2.o _dznrm2.f
</span><br>
<span class="quotelev1">&gt; _dznrm2.f(3) : (col. 32) remark: dznrm2_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; idamax.f &gt; _idamax.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o idamax.o _idamax.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; isamax.f &gt; _isamax.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o isamax.o _isamax.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; lsame.f &gt; _lsame.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o lsame.o _lsame.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; scopy.f &gt; _scopy.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o scopy.o _scopy.f
</span><br>
<span class="quotelev1">&gt; _scopy.f(42) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; sswap.f &gt; _sswap.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o sswap.o _sswap.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; sscal.f &gt; _sscal.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o sscal.o _sscal.f
</span><br>
<span class="quotelev1">&gt; _sscal.f(37) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; sasum.f &gt; _sasum.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o sasum.o _sasum.f
</span><br>
<span class="quotelev1">&gt; _sasum.f(40) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sasum.f(3) : (col. 20) remark: sasum_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; snrm2.f &gt; _snrm2.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o snrm2.o _snrm2.f
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; sdot.f &gt; _sdot.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o sdot.o _sdot.f
</span><br>
<span class="quotelev1">&gt; _sdot.f(45) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sdot.f(3) : (col. 20) remark: sdot_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; ssyr2k.f &gt; _ssyr2k.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o ssyr2k.o _ssyr2k.f
</span><br>
<span class="quotelev1">&gt; _ssyr2k.f(310) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ssyr2k.f(293) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ssyr2k.f(267) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ssyr2k.f(263) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ssyr2k.f(276) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ssyr2k.f(244) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ssyr2k.f(240) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ssyr2k.f(253) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ssyr2k.f(222) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ssyr2k.f(216) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ssyr2k.f(208) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ssyr2k.f(202) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ssyr2k.f(3) : (col. 17) remark: ssyr2k_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; saxpy.f &gt; _saxpy.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o saxpy.o _saxpy.f
</span><br>
<span class="quotelev1">&gt; _saxpy.f(43) : (col. 10) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; sgemv.f &gt; _sgemv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o sgemv.o _sgemv.f
</span><br>
<span class="quotelev1">&gt; _sgemv.f(182) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sgemv.f(178) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sgemv.f(239) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sgemv.f(212) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sgemv.f(3) : (col. 17) remark: sgemv_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; ssyr2.f &gt; _ssyr2.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o ssyr2.o _ssyr2.f
</span><br>
<span class="quotelev1">&gt; _ssyr2.f(203) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ssyr2.f(171) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; ssymv.f &gt; _ssymv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o ssymv.o _ssymv.f
</span><br>
<span class="quotelev1">&gt; _ssymv.f(169) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ssymv.f(165) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ssymv.f(232) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ssymv.f(198) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _ssymv.f(3) : (col. 17) remark: ssymv_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; sgemm.f &gt; _sgemm.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o sgemm.o _sgemm.f
</span><br>
<span class="quotelev1">&gt; _sgemm.f(278) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sgemm.f(274) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sgemm.f(285) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sgemm.f(256) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sgemm.f(236) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sgemm.f(232) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sgemm.f(243) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sgemm.f(215) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sgemm.f(209) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _sgemm.f(3) : (col. 17) remark: sgemm_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; strmm.f &gt; _strmm.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o strmm.o _strmm.f
</span><br>
<span class="quotelev1">&gt; _strmm.f(335) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _strmm.f(344) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _strmm.f(316) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _strmm.f(325) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _strmm.f(294) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _strmm.f(300) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _strmm.f(277) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _strmm.f(283) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _strmm.f(259) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _strmm.f(247) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _strmm.f(230) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _strmm.f(213) : (col. 28) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _strmm.f(194) : (col. 16) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _strmm.f(3) : (col. 17) remark: strmm_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; strmv.f &gt; _strmv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o strmv.o _strmv.f
</span><br>
<span class="quotelev1">&gt; _strmv.f(261) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _strmv.f(235) : (col. 22) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _strmv.f(200) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _strmv.f(172) : (col. 25) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; _strmv.f(3) : (col. 17) remark: strmv_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; sger.f &gt; _sger.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o sger.o _sger.f
</span><br>
<span class="quotelev1">&gt; _sger.f(130) : (col. 19) remark: LOOP WAS VECTORIZED.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zher2k.f &gt; _zher2k.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zher2k.o _zher2k.f
</span><br>
<span class="quotelev1">&gt; _zher2k.f(3) : (col. 17) remark: zher2k_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zswap.f &gt; _zswap.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zswap.o _zswap.f
</span><br>
<span class="quotelev1">&gt; _zswap.f(3) : (col. 18) remark: zswap_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zgemv.f &gt; _zgemv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zgemv.o _zgemv.f
</span><br>
<span class="quotelev1">&gt; _zgemv.f(3) : (col. 17) remark: zgemv_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zhemv.f &gt; _zhemv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zhemv.o _zhemv.f
</span><br>
<span class="quotelev1">&gt; _zhemv.f(3) : (col. 17) remark: zhemv_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zscal.f &gt; _zscal.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zscal.o _zscal.f
</span><br>
<span class="quotelev1">&gt; _zscal.f(3) : (col. 18) remark: zscal_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zdotc.f &gt; _zdotc.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zdotc.o _zdotc.f
</span><br>
<span class="quotelev1">&gt; _zdotc.f(3) : (col. 30) remark: zdotc_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zaxpy.f &gt; _zaxpy.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zaxpy.o _zaxpy.f
</span><br>
<span class="quotelev1">&gt; _zaxpy.f(3) : (col. 17) remark: zaxpy_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zher2.f &gt; _zher2.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zher2.o _zher2.f
</span><br>
<span class="quotelev1">&gt; _zher2.f(3) : (col. 17) remark: zher2_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zdscal.f &gt; _zdscal.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zdscal.o _zdscal.f
</span><br>
<span class="quotelev1">&gt; _zdscal.f(3) : (col. 18) remark: zdscal_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; ztrmv.f &gt; _ztrmv.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o ztrmv.o _ztrmv.f
</span><br>
<span class="quotelev1">&gt; _ztrmv.f(3) : (col. 17) remark: ztrmv_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zcopy.f &gt; _zcopy.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zcopy.o _zcopy.f
</span><br>
<span class="quotelev1">&gt; _zcopy.f(3) : (col. 18) remark: zcopy_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; ztrmm.f &gt; _ztrmm.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o ztrmm.o _ztrmm.f
</span><br>
<span class="quotelev1">&gt; _ztrmm.f(3) : (col. 17) remark: ztrmm_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zgemm.f &gt; _zgemm.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zgemm.o _zgemm.f
</span><br>
<span class="quotelev1">&gt; _zgemm.f(3) : (col. 17) remark: zgemm_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; zgerc.f &gt; _zgerc.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o zgerc.o _zgerc.f
</span><br>
<span class="quotelev1">&gt; _zgerc.f(3) : (col. 17) remark: zgerc_ has been targeted for  
</span><br>
<span class="quotelev1">&gt; automatic cpu dispatch.
</span><br>
<span class="quotelev1">&gt; ar rv blas.a dasum.o daxpy.o dcabs1.o dcopy.o ddot.o dgbmv.o  
</span><br>
<span class="quotelev1">&gt; dgemm.o dgemv.o dger.o dnrm2.o drot.o drotg.o dsbmv.o dscal.o  
</span><br>
<span class="quotelev1">&gt; dspmv.o dspr.o dspr2.o dswap.o dsymm.o dsymv.o dsyr.o dsyr2.o  
</span><br>
<span class="quotelev1">&gt; dsyr2k.o dsyrk.o dtbmv.o dtbsv.o dtpmv.o dtpsv.o dtrmm.o dtrmv.o  
</span><br>
<span class="quotelev1">&gt; dtrsm.o dtrsv.o dummy.o dzasum.o dznrm2.o idamax.o isamax.o lsame.o  
</span><br>
<span class="quotelev1">&gt; scopy.o sswap.o sscal.o sasum.o snrm2.o sdot.o ssyr2k.o saxpy.o  
</span><br>
<span class="quotelev1">&gt; sgemv.o ssyr2.o ssymv.o sgemm.o strmm.o strmv.o sger.o zher2k.o  
</span><br>
<span class="quotelev1">&gt; zswap.o zgemv.o zhemv.o zscal.o zdotc.o zaxpy.o zher2.o zdscal.o  
</span><br>
<span class="quotelev1">&gt; ztrmv.o zcopy.o ztrmm.o zgemm.o zgerc.o
</span><br>
<span class="quotelev1">&gt; ar: creating blas.a
</span><br>
<span class="quotelev1">&gt; a - dasum.o
</span><br>
<span class="quotelev1">&gt; a - daxpy.o
</span><br>
<span class="quotelev1">&gt; a - dcabs1.o
</span><br>
<span class="quotelev1">&gt; a - dcopy.o
</span><br>
<span class="quotelev1">&gt; a - ddot.o
</span><br>
<span class="quotelev1">&gt; a - dgbmv.o
</span><br>
<span class="quotelev1">&gt; a - dgemm.o
</span><br>
<span class="quotelev1">&gt; a - dgemv.o
</span><br>
<span class="quotelev1">&gt; a - dger.o
</span><br>
<span class="quotelev1">&gt; a - dnrm2.o
</span><br>
<span class="quotelev1">&gt; a - drot.o
</span><br>
<span class="quotelev1">&gt; a - drotg.o
</span><br>
<span class="quotelev1">&gt; a - dsbmv.o
</span><br>
<span class="quotelev1">&gt; a - dscal.o
</span><br>
<span class="quotelev1">&gt; a - dspmv.o
</span><br>
<span class="quotelev1">&gt; a - dspr.o
</span><br>
<span class="quotelev1">&gt; a - dspr2.o
</span><br>
<span class="quotelev1">&gt; a - dswap.o
</span><br>
<span class="quotelev1">&gt; a - dsymm.o
</span><br>
<span class="quotelev1">&gt; a - dsymv.o
</span><br>
<span class="quotelev1">&gt; a - dsyr.o
</span><br>
<span class="quotelev1">&gt; a - dsyr2.o
</span><br>
<span class="quotelev1">&gt; a - dsyr2k.o
</span><br>
<span class="quotelev1">&gt; a - dsyrk.o
</span><br>
<span class="quotelev1">&gt; a - dtbmv.o
</span><br>
<span class="quotelev1">&gt; a - dtbsv.o
</span><br>
<span class="quotelev1">&gt; a - dtpmv.o
</span><br>
<span class="quotelev1">&gt; a - dtpsv.o
</span><br>
<span class="quotelev1">&gt; a - dtrmm.o
</span><br>
<span class="quotelev1">&gt; a - dtrmv.o
</span><br>
<span class="quotelev1">&gt; a - dtrsm.o
</span><br>
<span class="quotelev1">&gt; a - dtrsv.o
</span><br>
<span class="quotelev1">&gt; a - dummy.o
</span><br>
<span class="quotelev1">&gt; a - dzasum.o
</span><br>
<span class="quotelev1">&gt; a - dznrm2.o
</span><br>
<span class="quotelev1">&gt; a - idamax.o
</span><br>
<span class="quotelev1">&gt; a - isamax.o
</span><br>
<span class="quotelev1">&gt; a - lsame.o
</span><br>
<span class="quotelev1">&gt; a - scopy.o
</span><br>
<span class="quotelev1">&gt; a - sswap.o
</span><br>
<span class="quotelev1">&gt; a - sscal.o
</span><br>
<span class="quotelev1">&gt; a - sasum.o
</span><br>
<span class="quotelev1">&gt; a - snrm2.o
</span><br>
<span class="quotelev1">&gt; a - sdot.o
</span><br>
<span class="quotelev1">&gt; a - ssyr2k.o
</span><br>
<span class="quotelev1">&gt; a - saxpy.o
</span><br>
<span class="quotelev1">&gt; a - sgemv.o
</span><br>
<span class="quotelev1">&gt; a - ssyr2.o
</span><br>
<span class="quotelev1">&gt; a - ssymv.o
</span><br>
<span class="quotelev1">&gt; a - sgemm.o
</span><br>
<span class="quotelev1">&gt; a - strmm.o
</span><br>
<span class="quotelev1">&gt; a - strmv.o
</span><br>
<span class="quotelev1">&gt; a - sger.o
</span><br>
<span class="quotelev1">&gt; a - zher2k.o
</span><br>
<span class="quotelev1">&gt; a - zswap.o
</span><br>
<span class="quotelev1">&gt; a - zgemv.o
</span><br>
<span class="quotelev1">&gt; a - zhemv.o
</span><br>
<span class="quotelev1">&gt; a - zscal.o
</span><br>
<span class="quotelev1">&gt; a - zdotc.o
</span><br>
<span class="quotelev1">&gt; a - zaxpy.o
</span><br>
<span class="quotelev1">&gt; a - zher2.o
</span><br>
<span class="quotelev1">&gt; a - zdscal.o
</span><br>
<span class="quotelev1">&gt; a - ztrmv.o
</span><br>
<span class="quotelev1">&gt; a - zcopy.o
</span><br>
<span class="quotelev1">&gt; a - ztrmm.o
</span><br>
<span class="quotelev1">&gt; a - zgemm.o
</span><br>
<span class="quotelev1">&gt; a - zgerc.o
</span><br>
<span class="quotelev1">&gt; ranlib blas.a
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/usr/local/amber9/src/blas'
</span><br>
<span class="quotelev1">&gt; cd ../lmod; make
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/usr/local/amber9/src/lmod'
</span><br>
<span class="quotelev1">&gt; cd xmin; make
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/usr/local/amber9/src/lmod/xmin'
</span><br>
<span class="quotelev1">&gt; Makefile:6: warning: overriding commands for target `.f.o'
</span><br>
<span class="quotelev1">&gt; ../../config.h:82: warning: ignoring old commands for target `.f.o'
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; xmin.f &gt; _xmin.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o xmin.o _xmin.f
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/usr/local/amber9/src/lmod/xmin'
</span><br>
<span class="quotelev1">&gt; cd lmod; make
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/usr/local/amber9/src/lmod/lmod'
</span><br>
<span class="quotelev1">&gt; Makefile:6: warning: overriding commands for target `.f.o'
</span><br>
<span class="quotelev1">&gt; ../../config.h:82: warning: ignoring old commands for target `.f.o'
</span><br>
<span class="quotelev1">&gt; cpp -traditional -I/usr/local/openmpi-1.2.3/include -P -DMPI   
</span><br>
<span class="quotelev1">&gt; lmod.f &gt; _lmod.f
</span><br>
<span class="quotelev1">&gt; ifort -c -w95   -mp1 -ip -O3 -tpp7 -axWP   -o lmod.o _lmod.f
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/usr/local/amber9/src/lmod/lmod'
</span><br>
<span class="quotelev1">&gt; ar rv lmod.a xmin/*.o lmod/*.o
</span><br>
<span class="quotelev1">&gt; ar: creating lmod.a
</span><br>
<span class="quotelev1">&gt; a - xmin/xmin.o
</span><br>
<span class="quotelev1">&gt; a - lmod/lmod.o
</span><br>
<span class="quotelev1">&gt; ranlib lmod.a
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/usr/local/amber9/src/lmod'
</span><br>
<span class="quotelev1">&gt; cd ../lmod; cp lmodprmtop ../../exe; chmod 0755 ../../exe/lmodprmtop
</span><br>
<span class="quotelev1">&gt; ifort   -FR  -o sander.MPI  evb_vars.o evb_input.o evb_init.o  
</span><br>
<span class="quotelev1">&gt; evb_alloc.o evb_dealloc.o check_input.o evb_io.o evb_keywrd.o  
</span><br>
<span class="quotelev1">&gt; exchange_CM.o evb_mcp.o evb_force.o diabatic.o evb_2stdebug.o  
</span><br>
<span class="quotelev1">&gt; egap_umb_2stdebug.o exchange_gauss.o exchange_warshel.o morsify.o  
</span><br>
<span class="quotelev1">&gt; morse_anal2num.o evb_matrix.o evb_ntrfc.o out_evb.o constants.o  
</span><br>
<span class="quotelev1">&gt; stack.o qmmm_module.o trace.o lmod.o decomp.o icosasurf.o egb.o  
</span><br>
<span class="quotelev1">&gt; findmask.o pb_force.o pb_exmol.o pb_mpfrc.o pb_direct.o pb_list.o  
</span><br>
<span class="quotelev1">&gt; np_force.o sa_driver.o relax_mat.o nmr.o multisander.o sander.o  
</span><br>
<span class="quotelev1">&gt; trajene.o cshf.o nmrcal.o pearsn.o printe.o runmin.o rdparm.o  
</span><br>
<span class="quotelev1">&gt; mdread.o locmem.o runmd.o getcor.o degcnt.o decnvh.o fastwt.o  
</span><br>
<span class="quotelev1">&gt; parallel.o shake.o ene.o mdwrit.o minrit.o set.o dynlib.o mdfil.o  
</span><br>
<span class="quotelev1">&gt; nmlsrc.o ew_force.o ew_setup.o ew_box.o ew_bspline.o ew_fft.o  
</span><br>
<span class="quotelev1">&gt; nonbond_list.o short_ene.o ew_recip.o pcshift.o align.o rfree.o  
</span><br>
<span class="quotelev1">&gt; rgroup.o random.o amopen.o debug.o ew_recip_reg.o ew_handle_dips.o  
</span><br>
<span class="quotelev1">&gt; ew_dipole_recip.o mexit.o new_time.o extra_pts.o thermo_int.o  
</span><br>
<span class="quotelev1">&gt; matinv.o assert.o mmtsb.o mmtsb_cl!
</span><br>
<span class="quotelev1">&gt;  ient.o erfcfun.o veclib.o is_init.o constantph.o prn_dipoles.o  
</span><br>
<span class="quotelev1">&gt; ips.o sglds.o amoeba_valence.o amoeba_multipoles.o amoeba_recip.o  
</span><br>
<span class="quotelev1">&gt; amoeba_interface.o amoeba_direct.o amoeba_mdin.o amoeba_adjust.o  
</span><br>
<span class="quotelev1">&gt; amoeba_self.o amoeba_vdw.o amoeba_induced.o amoeba_runmd.o   
</span><br>
<span class="quotelev1">&gt; bintraj.o spatial_recip.o spatial_fft.o parms.o qm_mm.o  
</span><br>
<span class="quotelev1">&gt; qm_link_atoms.o qm_nb_list.o qm_extract_coords.o qm_ewald.o qm_gb.o  
</span><br>
<span class="quotelev1">&gt; qm_zero_charges.o qm_print_info.o qm_assign_atom_types.o  
</span><br>
<span class="quotelev1">&gt; qm2_allocate_e_repul.o qm2_calc_charges.o qm2_calc_rij_and_eqns.o  
</span><br>
<span class="quotelev1">&gt; qm2_dihed.o qm2_energy.o qm2_fock.o qm2_get_qm_forces.o  
</span><br>
<span class="quotelev1">&gt; qm2_get_qmmm_forces.o qm2_h1elec.o qm2_hcore_qmqm.o  
</span><br>
<span class="quotelev1">&gt; qm2_hcore_qmmm.o qm2_identify_peptide_links.o  
</span><br>
<span class="quotelev1">&gt; qm2_load_params_and_allocate.o qm2_repp.o qm2_rotate_qmqm.o  
</span><br>
<span class="quotelev1">&gt; qm2_scf.o qm2_setup_orb_exp.o qm2_smallest_number.o   
</span><br>
<span class="quotelev1">&gt; qm2_dftb_module.o qm2_dftb_broyden.o qm2_dftb_dispersion_egr.o  
</span><br>
<span class="quotelev1">&gt; qm2_dftb_dispersion_params.o qm2_dftb_dispersionread.o  
</span><br>
<span class="quotelev1">&gt; qm2_dftb_eglcao.o qm2_dftb_energy.o qm2_dftb_ewevge.o  
</span><br>
<span class="quotelev1">&gt; qm2_dftb_externalchgrad.o qm2_dftb_externalshift!
</span><br>
<span class="quotelev1">&gt;  .o qm2_dftb_fermi.o qm2_dftb_forces.o qm2_dftb_gamma.o  
</span><br>
<span class="quotelev1">&gt; qm2_dftb_gammam
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; at.o qm2_dftb_get_qmmm_forces.o qm2_dftb_gettab.o  
</span><br>
<span class="quotelev1">&gt; qm2_dftb_load_params.o qm2_dftb_long_range.o qm2_dftb_main.o  
</span><br>
<span class="quotelev1">&gt; qm2_dftb_my_gradient.o qm2_dftb_my_mulliken.o qm2_dftb_repulsiv.o  
</span><br>
<span class="quotelev1">&gt; qm2_dftb_self.o qm2_dftb_shift.o qm2_dftb_short_range.o  
</span><br>
<span class="quotelev1">&gt; qm2_dftb_skpar.o qm2_dftb_slkode.o qm2_dftb_slktrafo.o  \
</span><br>
<span class="quotelev1">&gt;                    qm_div.o force.o \
</span><br>
<span class="quotelev1">&gt; 		../lmod/lmod.a ../lapack/lapack.a ../blas/blas.a \
</span><br>
<span class="quotelev1">&gt; 		../lib/nxtsec.o ../lib/sys.a
</span><br>
<span class="quotelev1">&gt; evb_init.o: In function `evb_init_':
</span><br>
<span class="quotelev1">&gt; _evb_init.f:(.text+0x69e): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _evb_init.f:(.text+0x6f0): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _evb_init.f:(.text+0xfd1): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _evb_init.f:(.text+0x1449): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _evb_init.f:(.text+0x1b09): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; evb_init.o:_evb_init.f:(.text+0x1df3): more undefined references to  
</span><br>
<span class="quotelev1">&gt; `mpi_bcast_' follow
</span><br>
<span class="quotelev1">&gt; qmmm_module.o: In function `qmmm_module_mp_qmmm_mpi_setup_.L':
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f:(.text+0x2341): undefined reference to `mpi_recv_'
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f:(.text+0x252a): undefined reference to `mpi_send_'
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f:(.text+0x27c1): undefined reference to `mpi_recv_'
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f:(.text+0x299f): undefined reference to `mpi_send_'
</span><br>
<span class="quotelev1">&gt; qmmm_module.o: In function `qmmm_module_mp_qmmm_mpi_setup_.A':
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f:(.text+0x2c82): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f:(.text+0x2ca9): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f:(.text+0x2cd0): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f:(.text+0x2cf7): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f:(.text+0x2d1e): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; qmmm_module.o:_qmmm_module.f:(.text+0x2d45): more undefined  
</span><br>
<span class="quotelev1">&gt; references to `mpi_bcast_' follow
</span><br>
<span class="quotelev1">&gt; qmmm_module.o: In function `qmmm_module_mp_qmmm_mpi_setup_.A':
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f:(.text+0x4f3d): undefined reference to `mpi_recv_'
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f:(.text+0x5126): undefined reference to `mpi_send_'
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f:(.text+0x53bd): undefined reference to `mpi_recv_'
</span><br>
<span class="quotelev1">&gt; _qmmm_module.f:(.text+0x559b): undefined reference to `mpi_send_'
</span><br>
<span class="quotelev1">&gt; egb.o: In function `genborn_mp_egb_':
</span><br>
<span class="quotelev1">&gt; _egb.f:(.text+0x41dd): undefined reference to `mpi_allreduce_'
</span><br>
<span class="quotelev1">&gt; egb.o: In function `genborn_mp_egb_calc_radii_':
</span><br>
<span class="quotelev1">&gt; _egb.f:(.text+0x8752): undefined reference to `mpi_allreduce_'
</span><br>
<span class="quotelev1">&gt; multisander.o: In function `MAIN__':
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x40): undefined reference to `mpi_init_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x68): undefined reference to `mpi_comm_rank_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x86): undefined reference to `mpi_comm_size_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x9c): undefined reference to `mpi_barrier_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x126): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x356): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x605): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x64f): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x70f): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x78c): undefined reference to `mpi_barrier_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x803): undefined reference to `mpi_comm_split_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x960): undefined reference to `mpi_comm_size_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x97e): undefined reference to `mpi_comm_rank_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x9f8): undefined reference to `mpi_comm_split_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0xb2c): undefined reference to `mpi_comm_size_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0xb4a): undefined reference to `mpi_comm_rank_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0xdc0): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0xdd6): undefined reference to `mpi_barrier_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x1508): undefined reference to `mpi_barrier_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x1c4e): undefined reference to `mpi_barrier_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x1de4): undefined reference to `mpi_allgather_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x32f2): undefined reference to `mpi_barrier_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x3496): undefined reference to `mpi_barrier_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x3523): undefined reference to `mpi_comm_free_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x3559): undefined reference to `mpi_comm_free_'
</span><br>
<span class="quotelev1">&gt; multisander.o: In function `subrem_':
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x36d4): undefined reference to `mpi_allgather_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x3742): undefined reference to `mpi_allgather_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x37b0): undefined reference to `mpi_allgather_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x498c): undefined reference to `mpi_barrier_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x49fb): undefined reference to `mpi_send_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x4a88): undefined reference to `mpi_barrier_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x4b03): undefined reference to `mpi_recv_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x4bc5): undefined reference to `mpi_barrier_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x4c3a): undefined reference to `mpi_gather_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x4cad): undefined reference to `mpi_gather_'
</span><br>
<span class="quotelev1">&gt; _multisander.f:(.text+0x4d04): undefined reference to `mpi_allreduce_'
</span><br>
<span class="quotelev1">&gt; sander.o: In function `sander_':
</span><br>
<span class="quotelev1">&gt; _sander.f:(.text+0x2e08): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _sander.f:(.text+0x2e4e): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _sander.f:(.text+0x2e94): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _sander.f:(.text+0x2eb1): undefined reference to `mpi_barrier_'
</span><br>
<span class="quotelev1">&gt; _sander.f:(.text+0x355e): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _sander.f:(.text+0x6dd1): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; nmrcal.o: In function `nmrcal_':
</span><br>
<span class="quotelev1">&gt; _nmrcal.f:(.text+0x195a): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _nmrcal.f:(.text+0x19af): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _nmrcal.f:(.text+0x1a1d): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; nmrcal.o:_nmrcal.f:(.text+0x1a8b): more undefined references to  
</span><br>
<span class="quotelev1">&gt; `mpi_bcast_' follow
</span><br>
<span class="quotelev1">&gt; runmin.o: In function `runmin_':
</span><br>
<span class="quotelev1">&gt; _runmin.f:(.text+0x78f): undefined reference to `mpi_sendrecv_'
</span><br>
<span class="quotelev1">&gt; _runmin.f:(.text+0x7e2): undefined reference to `mpi_sendrecv_'
</span><br>
<span class="quotelev1">&gt; _runmin.f:(.text+0x88b): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _runmin.f:(.text+0x8b5): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; mdread.o: In function `mdread2_':
</span><br>
<span class="quotelev1">&gt; _mdread.f:(.text+0x11d43): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _mdread.f:(.text+0x11da8): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _mdread.f:(.text+0x11f61): undefined reference to `mpi_sendrecv_'
</span><br>
<span class="quotelev1">&gt; _mdread.f:(.text+0x12007): undefined reference to `mpi_sendrecv_'
</span><br>
<span class="quotelev1">&gt; runmd.o: In function `runmd_.L':
</span><br>
<span class="quotelev1">&gt; _runmd.f:(.text+0x12a5): undefined reference to `mpi_allreduce_'
</span><br>
<span class="quotelev1">&gt; _runmd.f:(.text+0x15be): undefined reference to `mpi_sendrecv_'
</span><br>
<span class="quotelev1">&gt; _runmd.f:(.text+0x1626): undefined reference to `mpi_sendrecv_'
</span><br>
<span class="quotelev1">&gt; _runmd.f:(.text+0x1b21): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _runmd.f:(.text+0x1b4a): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _runmd.f:(.text+0x3abb): undefined reference to `mpi_allreduce_'
</span><br>
<span class="quotelev1">&gt; _runmd.f:(.text+0x7e34): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _runmd.f:(.text+0x8bdc): undefined reference to `mpi_sendrecv_'
</span><br>
<span class="quotelev1">&gt; _runmd.f:(.text+0x8c6c): undefined reference to `mpi_sendrecv_'
</span><br>
<span class="quotelev1">&gt; _runmd.f:(.text+0x8da8): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _runmd.f:(.text+0x8df9): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; runmd.o: In function `runmd_.A':
</span><br>
<span class="quotelev1">&gt; _runmd.f:(.text+0xa901): undefined reference to `mpi_allreduce_'
</span><br>
<span class="quotelev1">&gt; _runmd.f:(.text+0xac1a): undefined reference to `mpi_sendrecv_'
</span><br>
<span class="quotelev1">&gt; _runmd.f:(.text+0xac82): undefined reference to `mpi_sendrecv_'
</span><br>
<span class="quotelev1">&gt; _runmd.f:(.text+0xb17d): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _runmd.f:(.text+0xb1a6): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _runmd.f:(.text+0xd129): undefined reference to `mpi_allreduce_'
</span><br>
<span class="quotelev1">&gt; _runmd.f:(.text+0x114a3): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _runmd.f:(.text+0x1224b): undefined reference to `mpi_sendrecv_'
</span><br>
<span class="quotelev1">&gt; _runmd.f:(.text+0x122db): undefined reference to `mpi_sendrecv_'
</span><br>
<span class="quotelev1">&gt; _runmd.f:(.text+0x12417): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _runmd.f:(.text+0x12468): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; parallel.o: In function `startup_':
</span><br>
<span class="quotelev1">&gt; _parallel.f:(.text+0x8d): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _parallel.f:(.text+0xdf): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _parallel.f:(.text+0x131): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; parallel.o:_parallel.f:(.text+0x183): more undefined references to  
</span><br>
<span class="quotelev1">&gt; `mpi_bcast_' follow
</span><br>
<span class="quotelev1">&gt; parallel.o: In function `startup_':
</span><br>
<span class="quotelev1">&gt; _parallel.f:(.text+0xfbc): undefined reference to `mpi_barrier_'
</span><br>
<span class="quotelev1">&gt; parallel.o: In function `fdist_':
</span><br>
<span class="quotelev1">&gt; _parallel.f:(.text+0x120c): undefined reference to `mpi_reduce_'
</span><br>
<span class="quotelev1">&gt; _parallel.f:(.text+0x1371): undefined reference to `mpi_allreduce_'
</span><br>
<span class="quotelev1">&gt; _parallel.f:(.text+0x14eb): undefined reference to `mpi_allreduce_'
</span><br>
<span class="quotelev1">&gt; parallel.o: In function `fsum_':
</span><br>
<span class="quotelev1">&gt; _parallel.f:(.text+0x1806): undefined reference to `mpi_sendrecv_'
</span><br>
<span class="quotelev1">&gt; _parallel.f:(.text+0x1936): undefined reference to  
</span><br>
<span class="quotelev1">&gt; `mpi_reduce_scatter_'
</span><br>
<span class="quotelev1">&gt; parallel.o: In function `xdist_':
</span><br>
<span class="quotelev1">&gt; _parallel.f:(.text+0x1be5): undefined reference to `mpi_sendrecv_'
</span><br>
<span class="quotelev1">&gt; _parallel.f:(.text+0x1cd5): undefined reference to `mpi_allgatherv_'
</span><br>
<span class="quotelev1">&gt; ew_force.o: In function `ewald_force_.L':
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x82): undefined reference to `mpi_comm_rank_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x97): undefined reference to `mpi_comm_size_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x46f): undefined reference to `mpi_comm_size_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x484): undefined reference to `mpi_comm_rank_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x1825): undefined reference to `mpi_comm_rank_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x183a): undefined reference to `mpi_comm_size_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x194c): undefined reference to `mpi_allreduce_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x1d3c): undefined reference to `mpi_allreduce_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x2007): undefined reference to `mpi_comm_size_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x201c): undefined reference to `mpi_comm_rank_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x215a): undefined reference to `mpi_comm_rank_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x216f): undefined reference to `mpi_comm_size_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x2744): undefined reference to `mpi_comm_size_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x2759): undefined reference to `mpi_comm_rank_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x291c): undefined reference to `mpi_comm_rank_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x2931): undefined reference to `mpi_comm_size_'
</span><br>
<span class="quotelev1">&gt; ew_force.o: In function `ewald_force_.A':
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x31b2): undefined reference to `mpi_comm_rank_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x31c7): undefined reference to `mpi_comm_size_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x359f): undefined reference to `mpi_comm_size_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x35b4): undefined reference to `mpi_comm_rank_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x4955): undefined reference to `mpi_comm_rank_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x496a): undefined reference to `mpi_comm_size_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x4a7c): undefined reference to `mpi_allreduce_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x4e6c): undefined reference to `mpi_allreduce_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x5137): undefined reference to `mpi_comm_size_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x514c): undefined reference to `mpi_comm_rank_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x528a): undefined reference to `mpi_comm_rank_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x529f): undefined reference to `mpi_comm_size_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x5870): undefined reference to `mpi_comm_size_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x5885): undefined reference to `mpi_comm_rank_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x5a48): undefined reference to `mpi_comm_rank_'
</span><br>
<span class="quotelev1">&gt; _ew_force.f:(.text+0x5a5d): undefined reference to `mpi_comm_size_'
</span><br>
<span class="quotelev1">&gt; ew_setup.o: In function `ew_startup_':
</span><br>
<span class="quotelev1">&gt; _ew_setup.f:(.text+0x23ed): undefined reference to `mpi_comm_size_'
</span><br>
<span class="quotelev1">&gt; _ew_setup.f:(.text+0x2403): undefined reference to `mpi_comm_rank_'
</span><br>
<span class="quotelev1">&gt; _ew_setup.f:(.text+0x2486): undefined reference to `mpi_comm_size_'
</span><br>
<span class="quotelev1">&gt; _ew_setup.f:(.text+0x249c): undefined reference to `mpi_comm_rank_'
</span><br>
<span class="quotelev1">&gt; ew_setup.o: In function `startup_groups_':
</span><br>
<span class="quotelev1">&gt; _ew_setup.f:(.text+0x5bc4): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; ew_fft.o: In function `xy_zx_transpose_':
</span><br>
<span class="quotelev1">&gt; _ew_fft.f:(.text+0x8663): undefined reference to `mpi_wait_'
</span><br>
<span class="quotelev1">&gt; _ew_fft.f:(.text+0x881c): undefined reference to `mpi_isend_'
</span><br>
<span class="quotelev1">&gt; _ew_fft.f:(.text+0x88e8): undefined reference to `mpi_recv_'
</span><br>
<span class="quotelev1">&gt; ew_fft.o: In function `zx_xy_transpose_':
</span><br>
<span class="quotelev1">&gt; _ew_fft.f:(.text+0xa3b5): undefined reference to `mpi_wait_'
</span><br>
<span class="quotelev1">&gt; _ew_fft.f:(.text+0xa539): undefined reference to `mpi_isend_'
</span><br>
<span class="quotelev1">&gt; _ew_fft.f:(.text+0xa5f2): undefined reference to `mpi_recv_'
</span><br>
<span class="quotelev1">&gt; ew_fft.o: In function `xy_zx_trans_recv_':
</span><br>
<span class="quotelev1">&gt; _ew_fft.f:(.text+0xc04d): undefined reference to `mpi_recv_'
</span><br>
<span class="quotelev1">&gt; ew_fft.o: In function `zx_trans_recv_':
</span><br>
<span class="quotelev1">&gt; _ew_fft.f:(.text+0xc21d): undefined reference to `mpi_recv_'
</span><br>
<span class="quotelev1">&gt; nonbond_list.o: In function `nblist_mp_nonbond_list_':
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f:(.text+0x2fb8): undefined reference to `mpi_barrier_'
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f:(.text+0x3414): undefined reference to  
</span><br>
<span class="quotelev1">&gt; `mpi_comm_size_'
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f:(.text+0x3429): undefined reference to  
</span><br>
<span class="quotelev1">&gt; `mpi_comm_rank_'
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f:(.text+0x44d0): undefined reference to  
</span><br>
<span class="quotelev1">&gt; `mpi_allreduce_'
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f:(.text+0x4722): undefined reference to  
</span><br>
<span class="quotelev1">&gt; `mpi_allreduce_'
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f:(.text+0x473b): undefined reference to  
</span><br>
<span class="quotelev1">&gt; `mpi_comm_rank_'
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f:(.text+0x4750): undefined reference to  
</span><br>
<span class="quotelev1">&gt; `mpi_comm_size_'
</span><br>
<span class="quotelev1">&gt; _nonbond_list.f:(.text+0x4904): undefined reference to  
</span><br>
<span class="quotelev1">&gt; `mpi_allreduce_'
</span><br>
<span class="quotelev1">&gt; ew_recip.o: In function `ew_recip_mp_do_pmesh_kspace_':
</span><br>
<span class="quotelev1">&gt; _ew_recip.f:(.text+0xf2f): undefined reference to `mpi_barrier_'
</span><br>
<span class="quotelev1">&gt; debug.o: In function `get_analfrc_':
</span><br>
<span class="quotelev1">&gt; _debug.f:(.text+0xb2a1): undefined reference to `mpi_barrier_'
</span><br>
<span class="quotelev1">&gt; _debug.f:(.text+0xb483): undefined reference to `mpi_reduce_'
</span><br>
<span class="quotelev1">&gt; _debug.f:(.text+0xb61c): undefined reference to `mpi_reduce_'
</span><br>
<span class="quotelev1">&gt; debug.o: In function `merge_forces_':
</span><br>
<span class="quotelev1">&gt; _debug.f:(.text+0xbe11): undefined reference to `mpi_reduce_'
</span><br>
<span class="quotelev1">&gt; ew_dipole_recip.o: In function  
</span><br>
<span class="quotelev1">&gt; `ew_dipole_recip_mp_do_pmesh_dipole_kspace_':
</span><br>
<span class="quotelev1">&gt; _ew_dipole_recip.f:(.text+0x848): undefined reference to  
</span><br>
<span class="quotelev1">&gt; `mpi_barrier_'
</span><br>
<span class="quotelev1">&gt; _ew_dipole_recip.f:(.text+0xa4d): undefined reference to  
</span><br>
<span class="quotelev1">&gt; `mpi_barrier_'
</span><br>
<span class="quotelev1">&gt; _ew_dipole_recip.f:(.text+0xed6): undefined reference to  
</span><br>
<span class="quotelev1">&gt; `mpi_barrier_'
</span><br>
<span class="quotelev1">&gt; mexit.o: In function `mexit_':
</span><br>
<span class="quotelev1">&gt; _mexit.f:(.text+0x33): undefined reference to `mpi_abort_'
</span><br>
<span class="quotelev1">&gt; _mexit.f:(.text+0x5a): undefined reference to `mpi_finalize_'
</span><br>
<span class="quotelev1">&gt; new_time.o: In function `timer_barrier_':
</span><br>
<span class="quotelev1">&gt; _new_time.f:(.text+0x254): undefined reference to `mpi_barrier_'
</span><br>
<span class="quotelev1">&gt; new_time.o: In function `profile_time_':
</span><br>
<span class="quotelev1">&gt; _new_time.f:(.text+0x49f): undefined reference to `mpi_send_'
</span><br>
<span class="quotelev1">&gt; _new_time.f:(.text+0x6c3): undefined reference to `mpi_recv_'
</span><br>
<span class="quotelev1">&gt; ips.o: In function `ipsupdate_':
</span><br>
<span class="quotelev1">&gt; _ips.f:(.text+0x180d): undefined reference to `mpi_allreduce_'
</span><br>
<span class="quotelev1">&gt; sglds.o: In function `sgldw_':
</span><br>
<span class="quotelev1">&gt; _sglds.f:(.text+0x745): undefined reference to `mpi_allreduce_'
</span><br>
<span class="quotelev1">&gt; sglds.o: In function `sgmdw_':
</span><br>
<span class="quotelev1">&gt; _sglds.f:(.text+0xc87): undefined reference to `mpi_allreduce_'
</span><br>
<span class="quotelev1">&gt; spatial_recip.o: In function  
</span><br>
<span class="quotelev1">&gt; `ew_recip_spatial_mp_spatial_do_pmesh_kspace_.L':
</span><br>
<span class="quotelev1">&gt; _spatial_recip.f:(.text+0x2451): undefined reference to `mpi_barrier_'
</span><br>
<span class="quotelev1">&gt; spatial_recip.o: In function  
</span><br>
<span class="quotelev1">&gt; `ew_recip_spatial_mp_spatial_do_pmesh_kspace_.A':
</span><br>
<span class="quotelev1">&gt; _spatial_recip.f:(.text+0x52f8): undefined reference to `mpi_barrier_'
</span><br>
<span class="quotelev1">&gt; spatial_fft.o: In function `fft_mp_transpose_.L':
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x1516): undefined reference to  
</span><br>
<span class="quotelev1">&gt; `mpi_type_contiguous_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x1529): undefined reference to  
</span><br>
<span class="quotelev1">&gt; `mpi_type_commit_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x1a55): undefined reference to `mpi_waitany_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x1c11): undefined reference to `mpi_waitall_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x1c24): undefined reference to `mpi_type_free_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x2013): undefined reference to `mpi_isend_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x21f0): undefined reference to `mpi_irecv_'
</span><br>
<span class="quotelev1">&gt; spatial_fft.o: In function `fft_mp_transpose_.A':
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x236c): undefined reference to  
</span><br>
<span class="quotelev1">&gt; `mpi_type_contiguous_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x237f): undefined reference to  
</span><br>
<span class="quotelev1">&gt; `mpi_type_commit_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x287c): undefined reference to `mpi_waitany_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x2a4b): undefined reference to `mpi_waitall_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x2a5e): undefined reference to `mpi_type_free_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x2e3d): undefined reference to `mpi_isend_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x3027): undefined reference to `mpi_irecv_'
</span><br>
<span class="quotelev1">&gt; spatial_fft.o: In function `fft_mp_ftranspose_.L':
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x3aec): undefined reference to  
</span><br>
<span class="quotelev1">&gt; `mpi_type_contiguous_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x3aff): undefined reference to  
</span><br>
<span class="quotelev1">&gt; `mpi_type_commit_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x3fcf): undefined reference to `mpi_waitany_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x4203): undefined reference to `mpi_waitall_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x4232): undefined reference to `mpi_type_free_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x45f0): undefined reference to `mpi_isend_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x47a2): undefined reference to `mpi_irecv_'
</span><br>
<span class="quotelev1">&gt; spatial_fft.o: In function `fft_mp_ftranspose_.A':
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x4933): undefined reference to  
</span><br>
<span class="quotelev1">&gt; `mpi_type_contiguous_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x4946): undefined reference to  
</span><br>
<span class="quotelev1">&gt; `mpi_type_commit_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x4e28): undefined reference to `mpi_waitany_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x506f): undefined reference to `mpi_waitall_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x509e): undefined reference to `mpi_type_free_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x5461): undefined reference to `mpi_isend_'
</span><br>
<span class="quotelev1">&gt; _spatial_fft.f:(.text+0x5629): undefined reference to `mpi_irecv_'
</span><br>
<span class="quotelev1">&gt; qm_ewald.o: In function `qm_ewald_setup_':
</span><br>
<span class="quotelev1">&gt; _qm_ewald.f:(.text+0x6ba): undefined reference to `mpi_gather_'
</span><br>
<span class="quotelev1">&gt; qm2_load_params_and_allocate.o: In function  
</span><br>
<span class="quotelev1">&gt; `qm2_load_params_and_allocate_':
</span><br>
<span class="quotelev1">&gt; _qm2_load_params_and_allocate.f:(.text+0x1a80d): undefined  
</span><br>
<span class="quotelev1">&gt; reference to `mpi_allgather_'
</span><br>
<span class="quotelev1">&gt; qm2_scf.o: In function `qm2_scf_.L':
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f:(.text+0x6fa): undefined reference to `mpi_reduce_'
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f:(.text+0xe0b): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f:(.text+0x24e4): undefined reference to `mpi_allreduce_'
</span><br>
<span class="quotelev1">&gt; qm2_scf.o: In function `qm2_scf_.A':
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f:(.text+0x6c3c): undefined reference to `mpi_reduce_'
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f:(.text+0x734d): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _qm2_scf.f:(.text+0x8a2e): undefined reference to `mpi_allreduce_'
</span><br>
<span class="quotelev1">&gt; force.o: In function `force_.L':
</span><br>
<span class="quotelev1">&gt; _force.f:(.text+0x1590): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _force.f:(.text+0x1d2c): undefined reference to `mpi_allgather_'
</span><br>
<span class="quotelev1">&gt; _force.f:(.text+0x1d65): undefined reference to `mpi_allgather_'
</span><br>
<span class="quotelev1">&gt; _force.f:(.text+0x2cd2): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _force.f:(.text+0x2d18): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _force.f:(.text+0x2d40): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _force.f:(.text+0x2d67): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _force.f:(.text+0x2daa): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; force.o:_force.f:(.text+0x2dd2): more undefined references to  
</span><br>
<span class="quotelev1">&gt; `mpi_bcast_' follow
</span><br>
<span class="quotelev1">&gt; force.o: In function `force_.A':
</span><br>
<span class="quotelev1">&gt; _force.f:(.text+0x4b36): undefined reference to `mpi_allgather_'
</span><br>
<span class="quotelev1">&gt; _force.f:(.text+0x4b6f): undefined reference to `mpi_allgather_'
</span><br>
<span class="quotelev1">&gt; _force.f:(.text+0x5adc): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _force.f:(.text+0x5b22): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _force.f:(.text+0x5b4a): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _force.f:(.text+0x5b71): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; _force.f:(.text+0x5bb4): undefined reference to `mpi_bcast_'
</span><br>
<span class="quotelev1">&gt; force.o:_force.f:(.text+0x5bdc): more undefined references to  
</span><br>
<span class="quotelev1">&gt; `mpi_bcast_' follow
</span><br>
<span class="quotelev1">&gt; make[1]: *** [sander.MPI] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/usr/local/amber9/src/sander'
</span><br>
<span class="quotelev1">&gt; make: *** [parallel] Error 2
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
<li><strong>Next message:</strong> <a href="3759.php">Jeff Squyres: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<li><strong>Previous message:</strong> <a href="3757.php">Biagio Cosenza: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<li><strong>In reply to:</strong> <a href="3754.php">Francesco Pietra: "Re: [OMPI users] openmpi support ignored"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3762.php">Andrey Kaliazin: "Re: [OMPI users] openmpi support ignored"</a>
<li><strong>Reply:</strong> <a href="3762.php">Andrey Kaliazin: "Re: [OMPI users] openmpi support ignored"</a>
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
