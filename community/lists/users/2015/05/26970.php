<?
$subject_val = "Re: [OMPI users] MXM problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 28 14:13:29 2015" -->
<!-- isoreceived="20150528181329" -->
<!-- sent="Thu, 28 May 2015 21:13:20 +0300" -->
<!-- isosent="20150528181320" -->
<!-- name="&#208;&#162;&#208;&#184;&#208;&#188;&#209;&#131;&#209;&#128; &#208;&#152;&#209;&#129;&#208;&#188;&#208;&#176;&#208;&#179;&#208;&#184;&#208;&#187;&#208;&#190;&#208;&#178;" -->
<!-- email="tismagilov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MXM problem" -->
<!-- id="62726f73-50f3-4fe7-aab1-ea3e9c6e64ca_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAO1KyafE1KrbuPA3V01XdVcqvT3=MLdxmuvyTpJXTPyaCHMxA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MXM problem<br>
<strong>From:</strong> &#208;&#162;&#208;&#184;&#208;&#188;&#209;&#131;&#209;&#128; &#208;&#152;&#209;&#129;&#208;&#188;&#208;&#176;&#208;&#179;&#208;&#184;&#208;&#187;&#208;&#190;&#208;&#178; (<em>tismagilov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-28 14:13:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26971.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26969.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>In reply to:</strong> <a href="26966.php">Mike Dubman: "Re: [OMPI users] MXM problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p dir="ltr">I have already sent it On Thu, May 28, 2015 at 10:21 AM.</p>
<div class="gmail_quote">28 мая 2015 г. 20:07 пользователь Mike Dubman &lt;miked@dev.mellanox.co.il&gt; написал:<br type='attribution'><blockquote class="quote" style="margin:0 0 0 .8ex;border-left:1px #ccc solid;padding-left:1ex"><div dir="ltr"><div><br /></div><div>it is fine to recompile OMPI from HPCx to apply site default (choice of job scheduler for example, OMPI from HPCX compiled with ssh support only, etc.).</div><div><br /></div><div>If ssh launcher is working on your system - than OMPI from HPCX should work as well.</div><div><br /></div><div>could you please send to Alina (in cc) the command line and its output from hpcx/ompi failure?</div><div><br /></div><div>Thanks</div><div><br /></div></div><div><br /><div class="elided-text">On Thu, May 28, 2015 at 7:33 PM, Timur Ismagilov <span dir="ltr">&lt;<a href="mailto:tismagilov&#64;mail.ru">tismagilov&#64;mail.ru</a>&gt;</span> wrote:<br /><blockquote style="margin:0 0 0 0.8ex;border-left:1px #ccc solid;padding-left:1ex">
<div><p>Is it normal to rebuild openmpi from hpcx?<br />Why binaries don&#39;t work?<br /></p><p><br /><br /><br />Четверг, 28 мая 2015, 14:01 &#43;03:00 от Alina Sklarevich &lt;<a href="mailto:alinas&#64;dev.mellanox.co.il">alinas&#64;dev.mellanox.co.il</a>&gt;:<br />
</p><blockquote style="border-left:1px solid #0857a6;margin:10px;padding:0 0 0 10px">
	<div>
	



    











	
	


	
	
	

	

	
	

	

	
	



<div>
	
 	<div>
		
		
            <div><div dir="ltr">Thank you for this info.<div><br /></div><div>If &#39;yalla&#39; now works for you, is there anything that is still wrong?</div><div><br /></div><div>Thanks,</div><div>Alina.</div></div><div><br /><div>On Thu, May 28, 2015 at 10:21 AM, Timur Ismagilov <span dir="ltr">&lt;<a href="//e.mail.ru/compose/?mailto&#61;mailto%3atismagilov&#64;mail.ru">tismagilov&#64;mail.ru</a>&gt;</span> wrote:<br /><blockquote style="margin:0 0 0 0.8ex;border-left:1px #ccc solid;padding-left:1ex">
<div><p>I&#39;m sorry for the delay.<br /><br />Here it is:<br />(<strong>I used 5 min </strong><strong>time limit</strong>)<br />/gpfs/NETHOME/oivt1/nicevt/itf/sources/hpcx-v1.3.330-icc-OFED-1.5.4.1-redhat6.2-x86_64/ompi-mellanox-v1.8/bin/mpirun -x LD_PRELOAD&#61;/gpfs/NETHOME/oivt1/nicevt/itf/sources/hpcx-v1.3.330-icc-OFED-1.5.4.1-          redhat6.2-x86_64/mxm/debug/lib/libmxm.so -x MXM_LOG_LEVEL&#61;data -x MXM_IB_PORTS&#61;mlx4_0:1 -x MXM_SHM_KCOPY_MODE&#61;off --mca pml yalla --hostfile hostlist ./hello 1&gt; hello_debugMXM_n-2_ppn-2.out  2&gt;hello_debugMXM_n-2_ppn-2.err  </p><p>P.S.<br />yalla warks fine with rebuilded ompi: --with-mxm&#61;$HPCX_MXM_DIR<br /><br /><br /><br /></p><p><br /><br /><br />Вторник, 26 мая 2015, 16:22 &#43;03:00 от Alina Sklarevich &lt;<a href="//e.mail.ru/compose/?mailto&#61;mailto%3aalinas&#64;dev.mellanox.co.il">alinas&#64;dev.mellanox.co.il</a>&gt;:<br />
</p><blockquote style="border-left:1px solid #0857a6;margin:10px;padding:0 0 0 10px">
	<div>
	



    











	
	


	
	
	

	

	
	

	

	
	



<div>
	
 	<div>
		
		
            <div><div dir="ltr">Hi Timur,<div><br /></div><div>HPCX has a debug version of MXM. Can you please add the following to your command line with pml yalla in order to use it and attach the output? </div><div>&#34;-x LD_PRELOAD&#61;$HPCX_MXM_DIR/debug/lib/libmxm.so -x MXM_LOG_LEVEL&#61;data&#34;</div><div><br /></div><div>Also, could you please attach the entire output of &#34;$HPCX_MPI_DIR/bin/ompi_info -a&#34; </div><div><br /></div><div>Thank you,</div><div>Alina. </div></div><div><br /><div>On Tue, May 26, 2015 at 3:39 PM, Mike Dubman <span dir="ltr">&lt;<a href="https://e.mail.ru/compose/?mailto&#61;mailto%3amiked&#64;dev.mellanox.co.il">miked&#64;dev.mellanox.co.il</a>&gt;</span> wrote:<br /><blockquote style="margin:0 0 0 0.8ex;border-left:1px #ccc solid;padding-left:1ex"><div dir="ltr"><div>Alina - could you please take a look?</div><div>Thx</div><div><br /></div><br /><div><div><div>---------- Forwarded message ----------<br />From: <b>Timur Ismagilov</b> <span dir="ltr">&lt;<a href="https://e.mail.ru/compose/?mailto&#61;mailto%3atismagilov&#64;mail.ru">tismagilov&#64;mail.ru</a>&gt;</span><br />Date: Tue, May 26, 2015 at 12:40 PM<br />Subject: Re[12]: [OMPI users] MXM problem<br />To: Open MPI Users &lt;<a href="https://e.mail.ru/compose/?mailto&#61;mailto%3ausers&#64;open%2dmpi.org">users&#64;open-mpi.org</a>&gt;<br />Cc: Mike Dubman &lt;<a href="https://e.mail.ru/compose/?mailto&#61;mailto%3amiked&#64;dev.mellanox.co.il">miked&#64;dev.mellanox.co.il</a>&gt;<br /><br /><br />
</div></div><div><div><div><p>It does not work for single node:<br /><br /><strong>1)</strong> host: $  $HPCX_MPI_DIR/bin/mpirun -x MXM_IB_PORTS&#61;mlx4_0:1 -x MXM_SHM_KCOPY_MODE&#61;off -host node5 -mca pml yalla -x MXM_TLS&#61;ud,self,shm --prefix $HPCX_MPI_DIR -mca plm_base_verbose 5  -mca oob_base_verbose 10 -mca rml_base_verbose 10 --debug-daemons  -np 1 ./hello &amp;&gt; <strong>yalla.out </strong>                               </p><p><strong>2)</strong> host: $  $HPCX_MPI_DIR/bin/mpirun -x MXM_IB_PORTS&#61;mlx4_0:1 -x MXM_SHM_KCOPY_MODE&#61;off -host node5  --mca pml cm --mca mtl mxm --prefix $HPCX_MPI_DIR -mca plm_base_verbose 5  -mca oob_base_verbose 10 -mca rml_base_verbose 10 --debug-daemons -np 1 ./hello &amp;&gt; <strong>cm_mxm.out</strong> <br /><br />I&#39;ve attached the <strong>yalla.out</strong> and <strong>cm_mxm.out</strong>  to this email.<br /><br /><br /><br />Вторник, 26 мая 2015, 11:54 &#43;03:00 от Mike Dubman &lt;<a href="https://e.mail.ru/compose/?mailto&#61;mailto%3amiked&#64;dev.mellanox.co.il">miked&#64;dev.mellanox.co.il</a>&gt;:<br />
</p></div></div><blockquote style="border-left:1px solid #0857a6;margin:10px;padding:0 0 0 10px">
	<div>
	



    











	
	


	
	
	

	

	
	

	

	
	



<div>
	
 	<div>
		
		
            <div><div><div><div dir="ltr">does it work from single node?<div>could you please run with opts below and attach output?</div><div><br /></div><div> -mca plm_base_verbose 5  -mca oob_base_verbose 10 -mca rml_base_verbose 10 --debug-daemons<br /></div></div></div></div><div><br /><div><div><div>On Tue, May 26, 2015 at 11:38 AM, Timur Ismagilov <span dir="ltr">&lt;<a href="https://e.mail.ru/compose/?mailto&#61;mailto%3atismagilov&#64;mail.ru">tismagilov&#64;mail.ru</a>&gt;</span> wrote:<br /></div></div><blockquote style="margin:0 0 0 0.8ex;border-left:1px #ccc solid;padding-left:1ex">
<div><div><div><p>1. mxm_perf_test - OK.<br />2. no_tree_spawn  - OK.<br />3. ompi yalla and &#34;--mca pml cm --mca mtl mxm&#34; still does not work (I use prebuild ompi-1.8.5 from hpcx-v1.3.330)<br /><strong>3.a) host:$  $HPCX_MPI_DIR/bin/mpirun -x MXM_IB_PORTS&#61;mlx4_0:1 -x MXM_SHM_KCOPY_MODE&#61;off -host node5,node153  --mca pml cm --mca mtl mxm --prefix $HPCX_MPI_DIR ./hello</strong><br />--------------------------------------------------------------------------                               <br />A requested component was not found, or was unable to be opened.  This                                   <br />means that this component is either not installed or is unable to be                                     <br />used on your system (e.g., sometimes this means that shared libraries                                    <br />that the component requires are unable to be found/loaded).  Note that                                   <br />Open MPI stopped checking at the first component that it did not find.                                   <br />                                                                                                         <br />Host:      node153                                                                                       <br />Framework: mtl                                                                                           <br />Component: mxm                                                                                           <br />--------------------------------------------------------------------------                               <br />[node5:113560] PML cm cannot be selected                                                                 <br />--------------------------------------------------------------------------                               <br />No available pml components were found!                                                                  <br />                                                                                                         <br />This means that there are no components of this type installed on your                                   <br />system or all the components reported that they could not be used.                                       <br />                                                                                                         <br />This is a fatal error; your MPI process is likely to abort.  Check the                                   <br />output of the &#34;ompi_info&#34; command and ensure that components of this                                     <br />type are available on your system.  You may also wish to check the                                       <br />value of the &#34;component_path&#34; MCA parameter and ensure that it has at                                    <br />least one directory that contains valid MCA components.                                                  <br />--------------------------------------------------------------------------                               <br />[node153:44440] PML cm cannot be selected                                                                <br />-------------------------------------------------------                                                  <br />Primary job  terminated normally, but 1 process returned                                                 <br />a non-zero exit code.. Per user-direction, the job has been aborted.                                     <br />-------------------------------------------------------                                                  <br />--------------------------------------------------------------------------                               <br />mpirun detected that one or more processes exited with non-zero status, thus causing                     <br />the job to be terminated. The first process to do so was:                                                <br />                                                                                                         <br />  Process name: [[43917,1],0]                                                                            <br />  Exit code:    1                                                                                        <br />--------------------------------------------------------------------------                               <br />[login:110455] 1 more process has sent help message help-mca-base.txt / find-available:not-valid         <br />[login:110455] Set MCA parameter &#34;orte_base_help_aggregate&#34; to 0 to see all help / error messages        <br />[login:110455] 1 more process has sent help message help-mca-base.txt / find-available:none-found        <br />                            <br /><strong>3.b) host:$  $HPCX_MPI_DIR/bin/mpirun -x MXM_IB_PORTS&#61;mlx4_0:1 -x MXM_SHM_KCOPY_MODE&#61;off -host node5,node153 -mca pml yalla --prefix $HPCX_MPI_DIR ./hello</strong><br />--------------------------------------------------------------------------                               <br />A requested component was not found, or was unable to be opened.  This                                   <br />means that this component is either not installed or is unable to be                                     <br />used on your system (e.g., sometimes this means that shared libraries                                    <br />that the component requires are unable to be found/loaded).  Note that                                   <br />Open MPI stopped checking at the first component that it did not find.                                   <br />                                                                                                         <br />Host:      node153                                                                                       <br />Framework: pml                                                                                           <br />Component: yalla                                                                                         <br />--------------------------------------------------------------------------                               <br />*** An error occurred in MPI_Init                                                                        <br />--------------------------------------------------------------------------                               <br />It looks like MPI_INIT failed for some reason; your parallel process is                                  <br />likely to abort.  There are many reasons that a parallel process can                                     <br />fail during MPI_INIT; some of which are due to configuration or environment                              <br />problems.  This failure appears to be an internal failure; here&#39;s some                                   <br />additional information (which may only be relevant to an Open MPI                                        <br />developer):                                                                                              <br />                                                                                                         <br />  mca_pml_base_open() failed                                                                             <br />  --&gt; Returned &#34;Not found&#34; (-13) instead of &#34;Success&#34; (0)                                                <br />--------------------------------------------------------------------------                               <br />*** on a NULL communicator                                                                               <br />*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,                                 <br />***    and potentially your MPI job)                                                                     <br />[node153:43979] Local abort before MPI_INIT completed successfully; not able to aggregate error messages,<br /> and not able to guarantee that all other processes were killed!                                         <br />-------------------------------------------------------                                                  <br />Primary job  terminated normally, but 1 process returned                                                 <br />a non-zero exit code.. Per user-direction, the job has been aborted.                                     <br />-------------------------------------------------------                                                  <br />--------------------------------------------------------------------------                               <br />mpirun detected that one or more processes exited with non-zero status, thus causing                     <br />the job to be terminated. The first process to do so was:                                                <br />                                                                                                         <br />  Process name: [[44992,1],1]                                                                            <br />  Exit code:    1                                                                                        <br />--------------------------------------------------------------------------                               <br /><br /><br /><br /><strong>host:$  echo $HPCX_MPI_DIR</strong>                                                                         <br />/gpfs/NETHOME/oivt1/nicevt/itf/sources/hpcx-v1.3.330-icc-OFED-1.5.4.1-redhat6.2-x86_64/ompi-mellanox-v1.8<br /><strong>host:$ ompi_info | grep pml </strong>                                                                       <br />                 MCA pml: v (MCA v2.0, API v2.0, Component v1.8.5)                                       <br />                 MCA pml: cm (MCA v2.0, API v2.0, Component v1.8.5)                                      <br />                 MCA pml: bfo (MCA v2.0, API v2.0, Component v1.8.5)                                     <br />                 MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.8.5)                                     <br />                 MCA pml: yalla (MCA v2.0, API v2.0, Component v1.8.5)  <br /><strong>host: tests$  ompi_info | grep mtl                                   </strong><br />                 MCA mtl: mxm (MCA v2.0, API v2.0, Component v1.8.5)<br /><br /><strong>P.S.</strong><br />possible error in the FAQ? (<a href="http://www.open-mpi.org/faq/?category&#61;openfabrics#mxm">http://www.open-mpi.org/faq/?category&#61;openfabrics#mxm</a>)<br /></p><p>47. Does Open MPI support MXM?<br />............<br /><strong><font color="red">NOTE:</font></strong> Please note that the &#39;yalla&#39; pml is available only from Open MPI v1.9 and above<br />...........<br />But here we have(or not...) yalla in ompi 1.8.5<br /><br /><br /><br />Вторник, 26 мая 2015, 9:53 &#43;03:00 от Mike Dubman &lt;<a href="https://e.mail.ru/compose/?mailto&#61;mailto%3amiked&#64;dev.mellanox.co.il">miked&#64;dev.mellanox.co.il</a>&gt;:<br />
</p></div></div><blockquote style="border-left:1px solid #0857a6;margin:10px;padding:0 0 0 10px">
	<div>
	



    











	
	


	
	
	

	

	
	

	

	
	



<div>
	
 	<div>
		
		
            <div><div><div><div dir="ltr">Hi Timur,<div><br /></div><div>Here it goes:</div><div><br /></div><div>wget ftp://bgate.mellanox.com/hpc/hpcx/custom/v1.3/hpcx-v1.3.330-icc-OFED-1.5.4.1-redhat6.2-x86_64.tbz<br /></div><div><br /></div><div>Please let me know if it works for you and will add 1.5.4.1 mofed to the default distribution list.</div><div><br /></div><div>M</div><div><br /></div></div></div></div><div><br /><div><div><div>On Mon, May 25, 2015 at 9:38 PM, Timur Ismagilov <span dir="ltr">&lt;<a href="https://e.mail.ru/compose/?mailto&#61;mailto%3atismagilov&#64;mail.ru">tismagilov&#64;mail.ru</a>&gt;</span> wrote:<br /></div></div><blockquote style="margin:0 0 0 0.8ex;border-left:1px #ccc solid;padding-left:1ex">
<div><div><div>Thanks a lot.<br /><br />Понедельник, 25 мая 2015, 21:28 &#43;03:00 от Mike Dubman &lt;<a href="https://e.mail.ru/compose/?mailto&#61;mailto%3amiked&#64;dev.mellanox.co.il">miked&#64;dev.mellanox.co.il</a>&gt;:</div></div><div><div><br />
<blockquote style="border-left:1px solid #0857a6;margin:10px;padding:0 0 0 10px">
	<div>
	



    











	
	


	
	
	

	

	
	

	

	
	



<div>
	
 	<div>
		
		
            <div><div><div><div dir="ltr">will send u the link tomorrow.</div></div></div><div><br /><div><div><div>On Mon, May 25, 2015 at 9:15 PM, Timur Ismagilov <span dir="ltr">&lt;<a href="https://e.mail.ru/compose/?mailto&#61;mailto%3atismagilov&#64;mail.ru">tismagilov&#64;mail.ru</a>&gt;</span> wrote:<br /></div></div><blockquote style="margin:0 0 0 0.8ex;border-left:1px #ccc solid;padding-left:1ex">
<div><div><div>Where can i find MXM for ofed 1.5.4.1?<br /><br /><br />Понедельник, 25 мая 2015, 21:11 &#43;03:00 от Mike Dubman &lt;<a href="https://e.mail.ru/compose/?mailto&#61;mailto%3amiked&#64;dev.mellanox.co.il">miked&#64;dev.mellanox.co.il</a>&gt;:</div></div><div><div><br />
<blockquote style="border-left:1px solid #0857a6;margin:10px;padding:0 0 0 10px">
	<div>
	



    











	
	


	
	
	

	

	
	

	

	
	



<div>
	
 	<div>
		
		
            <div><div><div><div dir="ltr">btw, the ofed on your system is 1.5.4.1 while HPCx in use is for ofed 1.5.3<div><br /></div><div>seems like ABI issue between ofed versions</div></div></div></div><div><br /><div><div><div>On Mon, May 25, 2015 at 8:59 PM, Timur Ismagilov <span dir="ltr">&lt;<a href="https://e.mail.ru/compose/?mailto&#61;mailto%3atismagilov&#64;mail.ru">tismagilov&#64;mail.ru</a>&gt;</span> wrote:<br /></div></div><blockquote style="margin:0 0 0 0.8ex;border-left:1px #ccc solid;padding-left:1ex">
<div><div><div><p>I did as you said, but got an error:</p><p><br />node1$ export MXM_IB_PORTS&#61;mlx4_0:1<br />node1$  ./mxm_perftest                                                                            <br />Waiting for connection...                                                                                <br />Accepted connection from 10.65.0.253                                                                     <br />[1432576262.370195] [node153:35388:0]         shm.c:65   MXM  WARN  Could not open the KNEM device file at /dev/knem : No such file or directory. Won&#39;t use knem.                                                 <br />Failed to create endpoint: No such device                                                                <br /><br />node2$ export MXM_IB_PORTS&#61;mlx4_0:1<br />node2$ ./mxm_perftest node1  -t send_lat                                                       <br />[1432576262.367523] [node158:99366:0]         shm.c:65   MXM  WARN  Could not open the KNEM device file at /dev/knem : No such file or directory. Won&#39;t use knem.<br />Failed to create endpoint: No such device<br /><br /><br /><br /><br />Понедельник, 25 мая 2015, 20:31 &#43;03:00 от Mike Dubman &lt;<a href="https://e.mail.ru/compose/?mailto&#61;mailto%3amiked&#64;dev.mellanox.co.il">miked&#64;dev.mellanox.co.il</a>&gt;:<br />
</p></div></div><div><div><blockquote style="border-left:1px solid #0857a6;margin:10px;padding:0 0 0 10px">
	<div>
	



    











	
	


	
	
	

	

	
	

	

	
	



<div>
	
 	<div>
		
		
            <div><div><div><div dir="ltr">scif is a OFA device from Intel.<div>can you please select export MXM_IB_PORTS&#61;mlx4_0:1 explicitly and retry</div></div></div></div><div><br /><div><div><div>On Mon, May 25, 2015 at 8:26 PM, Timur Ismagilov <span dir="ltr">&lt;<a href="https://e.mail.ru/compose/?mailto&#61;mailto%3atismagilov&#64;mail.ru">tismagilov&#64;mail.ru</a>&gt;</span> wrote:<br /></div></div><blockquote style="margin:0 0 0 0.8ex;border-left:1px #ccc solid;padding-left:1ex">
<div><div><div><p>Hi, Mike,<br />that is what i have:<br /></p><p>$ echo $LD_LIBRARY_PATH | tr &#34;:&#34; &#34;\n&#34;<br />/gpfs/NETHOME/oivt1/nicevt/itf/sources/hpcx-v1.3.0-327-icc-OFED-1.5.3-redhat6.2/fca/lib               <br />/gpfs/NETHOME/oivt1/nicevt/itf/sources/hpcx-v1.3.0-327-icc-OFED-1.5.3-redhat6.2/hcoll/lib             <br />/gpfs/NETHOME/oivt1/nicevt/itf/sources/hpcx-v1.3.0-327-icc-OFED-1.5.3-redhat6.2/mxm/lib               <br />/gpfs/NETHOME/oivt1/nicevt/itf/sources/hpcx-v1.3.0-327-icc-OFED-1.5.3-redhat6.2/ompi-mellanox-v1.8/lib<br /> &#43;intel compiler paths<br /><br />$ echo $OPAL_PREFIX                                                                     <br />/gpfs/NETHOME/oivt1/nicevt/itf/sources/hpcx-v1.3.0-327-icc-OFED-1.5.3-redhat6.2/ompi-mellanox-v1.8<br /><br />I don&#39;t use LD_PRELOAD.<br /><br />In the attached file(ompi_info.out) you will find the output of ompi_info -l 9  command.<br /><br /><strong>P.S</strong>. <br />node1 $ ./mxm_perftest<br />node2 $  ./mxm_perftest node1  -t send_lat<br />[1432568685.067067] [node151:87372:0]         shm.c:65   MXM  WARN  Could not open the KNEM device file $t /dev/knem : No such file or directory. Won&#39;t use knem.         <strong>( I don&#39;t have knem)</strong><br />[1432568685.069699] [node151:87372:0]      ib_dev.c:531  MXM  WARN  skipping device scif0 (vendor_id/par$_id &#61; 0x8086/0x0) - not a Mellanox device                               <strong>(???)</strong><br />Failed to create endpoint: No such device<br /><br />$  ibv_devinfo                                         <br />hca_id: mlx4_0                                                  <br />        transport:                      InfiniBand (0)          <br />        fw_ver:                         2.10.600                <br />        node_guid:                      0002:c903:00a1:13b0     <br />        sys_image_guid:                 0002:c903:00a1:13b3     <br />        vendor_id:                      0x02c9                  <br />        vendor_part_id:                 4099                    <br />        hw_ver:                         0x0                     <br />        board_id:                       MT_1090120019           <br />        phys_port_cnt:                  2                       <br />                port:   1                                       <br />                        state:                  PORT_ACTIVE (4) <br />                        max_mtu:                4096 (5)        <br />                        active_mtu:             4096 (5)        <br />                        sm_lid:                 1               <br />                        port_lid:               83              <br />                        port_lmc:               0x00            <br />                                                                <br />                port:   2                                       <br />                        state:                  PORT_DOWN (1)   <br />                        max_mtu:                4096 (5)        <br />                        active_mtu:             4096 (5)        <br />                        sm_lid:                 0               <br />                        port_lid:               0               <br />                        port_lmc:               0x00            <br /><br /><span style="font-family:&#39;arial&#39; , &#39;helvetica&#39; , sans-serif">Best regards,</span><br /><span style="font-family:&#39;arial&#39; , &#39;helvetica&#39; , sans-serif">Timur.</span><br /><br /></p><p><br />Понедельник, 25 мая 2015, 19:39 &#43;03:00 от Mike Dubman &lt;<a href="https://e.mail.ru/compose/?mailto&#61;mailto%3amiked&#64;dev.mellanox.co.il">miked&#64;dev.mellanox.co.il</a>&gt;:<br />
</p></div></div><div><div><blockquote style="border-left:1px solid #0857a6;margin:10px;padding:0 0 0 10px">
	<div>
	



    











	
	


	
	
	

	

	
	

	

	
	



<div>
	
 	<div>
		
		
            <div><div><div><div dir="ltr">Hi Timur,<div>seems that yalla component was not found in your OMPI tree.</div><div>can it be that your mpirun is not from hpcx? Can you please check LD_LIBRARY_PATH,PATH, LD_PRELOAD and OPAL_PREFIX that it is pointing to the right mpirun?</div><div><br /></div><div>Also, could you please check that yalla is present in the ompi_info -l 9 output?</div><div><br /></div><div>Thanks</div></div></div></div><div><br /><div><div><div>On Mon, May 25, 2015 at 7:11 PM, Timur Ismagilov <span dir="ltr">&lt;<a href="https://e.mail.ru/compose/?mailto&#61;mailto%3atismagilov&#64;mail.ru">tismagilov&#64;mail.ru</a>&gt;</span> wrote:<br /></div></div><blockquote style="margin:0 0 0 0.8ex;border-left:1px #ccc solid;padding-left:1ex">
<div><div><div>I can password-less ssh to all nodes:<br />base$ ssh node1<br />node1$ssh node2<br />Last login: Mon May 25 18:41:23 <br />node2$ssh node3<br />Last login: Mon May 25 16:25:01<br />node3$ssh node4<br />Last login: Mon May 25 16:27:04<br />node4$<br /><br />Is this correct?<br /><br />In ompi-1.9 i do not have no-tree-spawn problem.<br /><br /><br />Понедельник, 25 мая 2015, 9:04 -07:00 от Ralph Castain &lt;<a href="https://e.mail.ru/compose/?mailto&#61;mailto%3arhc&#64;open%2dmpi.org">rhc&#64;open-mpi.org</a>&gt;:</div></div><div><div><br />
<blockquote style="border-left:1px solid #0857a6;margin:10px;padding:0 0 0 10px">
	<div>
	



    











	
	


	
	
	

	

	
	

	

	
	



<div>
	
 	<div>
		
		
            <div><div><div>I can’t speak to the mxm problem, but the no-tree-spawn issue indicates that you don’t have password-less ssh authorized between the compute nodes<div><br /></div></div></div><div><br /><div><blockquote><div><div><div>On May 25, 2015, at 8:55 AM, Timur Ismagilov &lt;<a href="https://e.mail.ru/compose/?mailto&#61;mailto%3atismagilov&#64;mail.ru">tismagilov&#64;mail.ru</a>&gt; wrote:</div><br /></div></div><div>
<div><p></p><div><div>Hello!<br /><br />I use ompi-v1.8.4 from hpcx-v1.3.0-327-icc-OFED-1.5.3-redhat6.2;<br />OFED-1.5.4.1;<br />CentOS release 6.2;<br />infiniband 4x FDR<br /><br /><br /><br />I have two problems:<br /><strong>1. I can not use mxm</strong>:<br /><strong><span style="text-decoration:underline">1.a) $mpirun --mca pml cm --mca mtl mxm -host node5,node14,node28,node29 -mca plm_rsh_no_tree_spawn 1 -np 4 ./hello</span> </strong><br />--------------------------------------------------------------------------                               <br />A requested component was not found, or was unable to be opened.  This                                   <br />means that this component is either not installed or is unable to be                                     <br />used on your system (e.g., sometimes this means that shared libraries                                    <br />that the component requires are unable to be found/loaded).  Note that                                   <br />Open MPI stopped checking at the first component that it did not find.                                   <br />                                                                                                         <br />Host:      node14                                                                                        <br />Framework: pml                                                                                           <br />Component: yalla                                                                                         <br />--------------------------------------------------------------------------                               <br />*** An error occurred in MPI_Init                                                                        <br />--------------------------------------------------------------------------                               <br />It looks like MPI_INIT failed for some reason; your parallel process is                                  <br />likely to abort.  There are many reasons that a parallel process can                                     <br />fail during MPI_INIT; some of which are due to configuration or environment                              <br />problems.  This failure appears to be an internal failure; here&#39;s some                                   <br />additional information (which may only be relevant to an Open MPI                                        <br />developer):                                                                                              <br />                                                                                                         <br />  mca_pml_base_open() failed                                                                             <br />  --&gt; Returned &#34;Not found&#34; (-13) instead of &#34;Success&#34; (0)                                                <br />--------------------------------------------------------------------------                               <br />*** on a NULL communicator                                                                               <br />*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,                                 <br />***    and potentially your MPI job)                                                                     <br />*** An error occurred in MPI_Init                                                                        <br />[node28:102377] Local abort before MPI_INIT completed successfully; not able to aggregate error messages,<br /> and not able to guarantee that all other processes were killed!                                         <br />*** on a NULL communicator                                                                               <br />*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,                                 <br />***    and potentially your MPI job)                                                                     <br />[node29:105600] Local abort before MPI_INIT completed successfully; not able to aggregate error messages,<br /> and not able to guarantee that all other processes were killed!                                         <br />*** An error occurred in MPI_Init                                                                        <br />*** on a NULL communicator                                                                               <br />*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,                                 <br />***    and potentially your MPI job)                                                                     <br />[node5:102409] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, <br />and not able to guarantee that all other processes were killed!                                          <br />*** An error occurred in MPI_Init                                                                        <br />*** on a NULL communicator                                                                               <br />*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,                                 <br />***    and potentially your MPI job)                                                                     <br />[node14:85284] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, <br />and not able to guarantee that all other processes were killed!                                          <br />-------------------------------------------------------                                                  <br />Primary job  terminated normally, but 1 process returned                                                 <br />a non-zero exit code.. Per user-direction, the job has been aborted.                                     <br />-------------------------------------------------------                                                  <br />--------------------------------------------------------------------------                               <br />mpirun detected that one or more processes exited with non-zero status, thus causing                     <br />the job to be terminated. The first process to do so was:                                                <br />                                                                                                         <br />  Process name: [[9372,1],2]<br />  Exit code:    1                                                                                        <br />--------------------------------------------------------------------------                               <br />[login:08295] 3 more processes have sent help message help-mca-base.txt / find-available:not-valid       <br />[login:08295] Set MCA parameter &#34;orte_base_help_aggregate&#34; to 0 to see all help / error messages         <br />[login:08295] 3 more processes have sent help message help-mpi-runtime / mpi_init:startup:internal-failur<br />e                                                                                                        <br /><br /><strong><span style="text-decoration:underline">1.b $mpirun --mca pml yalla -host node5,node14,node28,node29 -mca plm_rsh_no_tree_spawn 1 -np 4 ./hello</span> </strong><br />--------------------------------------------------------------------------                              <br />A requested component was not found, or was unable to be opened.  This                                  <br />means that this component is either not installed or is unable to be                                    <br />used on your system (e.g., sometimes this means that shared libraries                                   <br />that the component requires are unable to be found/loaded).  Note that                                  <br />Open MPI stopped checking at the first component that it did not find.                                  <br />                                                                                                        <br />Host:      node5                                                                                        <br />Framework: pml                                                                                          <br />Component: yalla                                                                                        <br />--------------------------------------------------------------------------                              <br />*** An error occurred in MPI_Init                                                                       <br />*** on a NULL communicator                                                                              <br />*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,                                <br />***    and potentially your MPI job)                                                                    <br />[node5:102449] Local abort before MPI_INIT completed successfully; not able to aggregate error messages,<br />and not able to guarantee that all other processes were killed!                                         <br />--------------------------------------------------------------------------                              <br />It looks like MPI_INIT failed for some reason; your parallel process is                                 <br />likely to abort.  There are many reasons that a parallel process can                                    <br />fail during MPI_INIT; some of which are due to configuration or environment                             <br />problems.  This failure appears to be an internal failure; here&#39;s some                                  <br />additional information (which may only be relevant to an Open MPI                                       <br />developer):                                                                                             <br />                                                                                                        <br />  mca_pml_base_open() failed                                                                            <br />  --&gt; Returned &#34;Not found&#34; (-13) instead of &#34;Success&#34; (0)                                               <br />--------------------------------------------------------------------------                              <br />-------------------------------------------------------                                                 <br />Primary job  terminated normally, but 1 process returned                                                <br />a non-zero exit code.. Per user-direction, the job has been aborted.                                    <br />-------------------------------------------------------                                                 <br />*** An error occurred in MPI_Init                                                                       <br />*** on a NULL communicator                                                                              <br />*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,                                <br />***    and potentially your MPI job)                                                                    <br />[node14:85325] Local abort before MPI_INIT completed successfully; not able to aggregate error messages,<br />and not able to guarantee that all other processes were killed!                                         <br />--------------------------------------------------------------------------                              <br />mpirun detected that one or more processes exited with non-zero status, thus causing                    <br />the job to be terminated. The first process to do so was:                                               <br />                                                                                                        <br />  Process name: [[9619,1],0]                                                                            <br />  Exit code:    1                                                                                       <br />--------------------------------------------------------------------------                              <br />[login:08552] 1 more process has sent help message help-mca-base.txt / find-available:not-valid         <br />[login:08552] Set MCA parameter &#34;orte_base_help_aggregate&#34; to 0 to see all help / error messages        <br /><strong><br />2. I can not remove <strong>-mca plm_rsh_no_tree_spawn 1 from mpirun cmd line</strong>:</strong><br />$mpirun -host node5,node14,node28,node29 -np 4 ./hello<br />sh: -c: line 0: syntax error near unexpected token &#96;--tree-spawn&#39;                                        <br />sh: -c: line 0: &#96;( test ! -r ./.profile || . ./.profile; OPAL_PREFIX&#61;/gpfs/NETHOME/oivt1/nicevt/itf/sourc<br />es/hpcx-v1.3.0-327-icc-OFED-1.5.3-redhat6.2/ompi-mellanox-v1.8 ; export OPAL_PREFIX; PATH&#61;/gpfs/NETHOME/o<br />ivt1/nicevt/itf/sources/hpcx-v1.3.0-327-icc-OFED-1.5.3-redhat6.2/ompi-mellanox-v1.8/bin:$PATH ; export PA<br />TH ; LD_LIBRARY_PATH&#61;/gpfs/NETHOME/oivt1/nicevt/itf/sources/hpcx-v1.3.0-327-icc-OFED-1.5.3-redhat6.2/ompi<br />-mellanox-v1.8/lib:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ; DYLD_LIBRARY_PATH&#61;/gpfs/NETHOME/oivt1/nice<br />vt/itf/sources/hpcx-v1.3.0-327-icc-OFED-1.5.3-redhat6.2/ompi-mellanox-v1.8/lib:$DYLD_LIBRARY_PATH ; expor<br />t DYLD_LIBRARY_PATH ;   /gpfs/NETHOME/oivt1/nicevt/itf/sources/hpcx-v1.3.0-327-icc-OFED-1.5.3-redhat6.2/o<br />mpi-mellanox-v1.8/bin/orted --hnp-topo-sig 2N:2S:2L3:16L2:16L1:16C:32H:x86_64 -mca ess &#34;env&#34; -mca orte_es<br />s_jobid &#34;625606656&#34; -mca orte_ess_vpid 3 -mca orte_ess_num_procs &#34;5&#34; -mca orte_parent_uri &#34;625606656.1;tc<br />p://10.65.0.105,10.64.0.105,10.67.0.105:56862&#34; -mca orte_hnp_uri &#34;625606656.0;tcp://10.65.0.2,10.67.0.2,8<br />3.149.214.101,<a href="http://10.64.0.2:54893">10.64.0.2:54893</a>&#34; --mca pml &#34;yalla&#34; -mca plm_rsh_no_tree_spawn &#34;0&#34; -mca plm &#34;rsh&#34; ) --tree-s<br />pawn&#39;                                                                                                    <br />--------------------------------------------------------------------------                               <br />ORTE was unable to reliably start one or more daemons.                                                   <br />This usually is caused by:                                                                               <br />                                                                                                         <br />* not finding the required libraries and/or binaries on                                                  <br />  one or more nodes. Please check your PATH and LD_LIBRARY_PATH                                          <br />  settings, or configure OMPI with --enable-orterun-prefix-by-default                                    <br />                                                                                                         <br />* lack of authority to execute on one or more specified nodes.                                           <br />  Please verify your allocation and authorities.                                                         <br />                                                                                                         <br />* the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).                            <br />  Please check with your sys admin to determine the correct location to use.                             <br />                                                                                                         <br />*  compilation of the orted with dynamic libraries when static are required                              <br />  (e.g., on Cray). Please check your configure cmd line and consider using                               <br />  one of the contrib/platform definitions for your system type.                                          <br />                                                                                                         <br />* an inability to create a connection back to mpirun due to a                                            <br /></div></div>  lack of common network interfaces and/or no route found between                                        <br />  them. Please check network connectivity (including firewalls                                           <br />  and network routing requirements).                                                                     <br />--------------------------------------------------------------------------                               <br />mpirun: abort is already in progress...hit ctrl-c again to forcibly terminate                          <br />                                                                                                         <br /><p></p><div><span style="font-family:&#39;arial&#39; , &#39;helvetica&#39; , sans-serif">Thank you for your comments.</span></div><div><span style="font-family:&#39;arial&#39; , &#39;helvetica&#39; , sans-serif"> </span></div><div><span style="font-family:&#39;arial&#39; , &#39;helvetica&#39; , sans-serif">Best regards,<br />Timur.<br /></span></div><div><span style="font-family:&#39;arial&#39; , &#39;helvetica&#39; , sans-serif"> </span><br /></div><p><br /><br /></p></div><div><div>
_______________________________________________<br />users mailing list<br /><a href="https://e.mail.ru/compose/?mailto&#61;mailto%3ausers&#64;open%2dmpi.org">users&#64;open-mpi.org</a><br />Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br />Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26919.php">http://www.open-mpi.org/community/lists/users/2015/05/26919.php</a><br /></div></div></div></blockquote></div><br /></div></div>
            
        
		
	</div>

	
</div>


</div>
</blockquote>
<br />
<br /> <br /></div></div></div><div><div>
<br />_______________________________________________<br />
users mailing list<br />
<a href="https://e.mail.ru/compose/?mailto&#61;mailto%3ausers&#64;open%2dmpi.org">users&#64;open-mpi.org</a><br />
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br />
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26922.php">http://www.open-mpi.org/community/lists/users/2015/05/26922.php</a><br /></div></div></blockquote></div><br /><br clear="all" /><div><br /></div>-- <br /><div><div dir="ltr"><br /><div>Kind Regards,</div><div><br /></div><div>M.</div></div></div>
</div>
</div>
            
        
		
	</div>

	
</div>


</div>
</blockquote>
<br />
<br /> <br /></div></div></div>
</blockquote></div><br /><br clear="all" /><div><br /></div>-- <br /><div><div dir="ltr"><br /><div>Kind Regards,</div><div><br /></div><div>M.</div></div></div>
</div>
</div>
            
        
		
	</div>

	
</div>


</div>
</blockquote>
<br />
<br /> <br /></div></div></div>
</blockquote></div><br /><br clear="all" /><div><br /></div>-- <br /><div><div dir="ltr"><br /><div>Kind Regards,</div><div><br /></div><div>M.</div></div></div>
</div>
</div>
            
        
		
	</div>

	
</div>


</div>
</blockquote>
<br />
<br /><br /></div></div></div>
</blockquote></div><br /><br clear="all" /><font color="#888888"></font><div><br /></div>-- <br /><div><div dir="ltr"><br /><div>Kind Regards,</div><div><br /></div><div>M.</div></div></div>
</div><font color="#888888">
</font></div><font color="#888888">
            
        
		
	</font></div><font color="#888888">

	
</font></div><font color="#888888">


</font></div><font color="#888888">
</font></blockquote><font color="#888888">
<br />
<br /><br /></font></div></div></div><font color="#888888">
</font></blockquote></div><font color="#888888"><br /><br clear="all" /><font color="#888888"></font></font><div><br /></div>-- <br /><div><div dir="ltr"><br /><div>Kind Regards,</div><div><br /></div><div>M.</div></div></div>
</div><font color="#888888">
</font></div><font color="#888888">
            
        
		
	</font></div><font color="#888888">

	
</font></div><font color="#888888">


</font></div><font color="#888888">
</font></blockquote><font color="#888888">
<br />
<br /> <br /></font></div><font color="#888888">
</font></blockquote></div><font color="#888888"><br /><br clear="all" /><font color="#888888"><font color="#888888"><font color="#888888"></font></font></font></font><div><br /></div>-- <br /><div><div dir="ltr"><br /><div>Kind Regards,</div><div><br /></div><div>M.</div></div></div>
</div><font color="#888888"><font color="#888888"><font color="#888888">
</font></font></font></div><font color="#888888"><font color="#888888"><font color="#888888">
            
        
		
	</font></font></font></div><font color="#888888"><font color="#888888"><font color="#888888">

	
</font></font></font></div><font color="#888888"><font color="#888888"><font color="#888888">


</font></font></font></div><font color="#888888"><font color="#888888"><font color="#888888">
</font></font></font></blockquote><font color="#888888"><font color="#888888"><font color="#888888">
<br />
<br /> <br /></font></font></font></div><font color="#888888"><font color="#888888"><font color="#888888">
</font></font></font></div><font color="#888888"><font color="#888888"><font color="#888888"><br /><br clear="all" /></font></font></font><div><br /></div>-- <br /><div><div dir="ltr"><br /><div>Kind Regards,</div><div><br /></div><div>M.</div></div></div>
</div><font color="#888888"><font color="#888888">
</font></font></blockquote></div><font color="#888888"><font color="#888888"><br /></font></font></div><font color="#888888">
</font></div><font color="#888888">
            
        
		
	</font></div><font color="#888888">

	
</font></div><font color="#888888">


</font></div><font color="#888888">
</font></blockquote><font color="#888888">
<br />
<br /> <br /></font></div><font color="#888888">
</font></blockquote></div><font color="#888888"><br /></font></div>
</div>
            
        
		
	</div>

	
</div>


</div>
</blockquote>
<br />
<br /><br /></div>
<br />_______________________________________________<br />
users mailing list<br />
<a href="mailto:users&#64;open-mpi.org">users&#64;open-mpi.org</a><br />
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br />
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26965.php">http://www.open-mpi.org/community/lists/users/2015/05/26965.php</a><br /></blockquote></div><br /><br clear="all" /><div><br /></div>-- <br /><div><div dir="ltr"><br /><div>Kind Regards,</div><div><br /></div><div>M.</div></div></div>
</div>
</blockquote></div><!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26971.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26969.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>In reply to:</strong> <a href="26966.php">Mike Dubman: "Re: [OMPI users] MXM problem"</a>
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
