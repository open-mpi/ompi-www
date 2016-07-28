<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 17 10:06:11 2005" -->
<!-- isoreceived="20050817150611" -->
<!-- sent="Wed, 17 Aug 2005 09:06:08 -0600" -->
<!-- isosent="20050817150608" -->
<!-- name="Nathan DeBardeleben" -->
<!-- email="ndebard_at_[hidden]" -->
<!-- subject="Re:  OMPI 32bit on a 64bit Linux box" -->
<!-- id="43035260.2030309_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="430350BD.1020608_at_lanl.gov" -->
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
<strong>From:</strong> Nathan DeBardeleben (<em>ndebard_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-17 10:06:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0176.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0174.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>In reply to:</strong> <a href="0174.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0179.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0179.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to clarify:
<br>
&nbsp;&nbsp;1: no orted started (meaning the MPIrun or registry programs will 
<br>
start one by themselves) causes those programs to lock up.
<br>
&nbsp;&nbsp;2: starting orted by hand (trying to get these programs to connect to 
<br>
a centralized one) causes the connecting programs to seg fault.
<br>
<p>-- Nathan
<br>
Correspondence
<br>
---------------------------------------------------------------------
<br>
Nathan DeBardeleben, Ph.D.
<br>
Los Alamos National Laboratory
<br>
Parallel Tools Team
<br>
High Performance Computing Environments
<br>
phone: 505-667-3428
<br>
email: ndebard_at_[hidden]
<br>
---------------------------------------------------------------------
<br>
<p><p><p>Nathan DeBardeleben wrote:
<br>
<p><span class="quotelev1">&gt;So I dropped an .ompi_ignore into that directory, reconfigured, and 
</span><br>
<span class="quotelev1">&gt;compile worked (yay!).
</span><br>
<span class="quotelev1">&gt;However, not a lot of progress: mpirun locks up, all my registry test 
</span><br>
<span class="quotelev1">&gt;programs lock up as well.  If I start the orted by hand, then any of my 
</span><br>
<span class="quotelev1">&gt;registry calling programs cause segfault:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[sparkplug]~/ptp &gt; gdb sub_test
</span><br>
<span class="quotelev2">&gt;&gt;GNU gdb 6.1
</span><br>
<span class="quotelev2">&gt;&gt;Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt;&gt;GDB is free software, covered by the GNU General Public License, and 
</span><br>
<span class="quotelev2">&gt;&gt;you are
</span><br>
<span class="quotelev2">&gt;&gt;welcome to change it and/or distribute copies of it under certain 
</span><br>
<span class="quotelev2">&gt;&gt;conditions.
</span><br>
<span class="quotelev2">&gt;&gt;Type &quot;show copying&quot; to see the conditions.
</span><br>
<span class="quotelev2">&gt;&gt;There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for 
</span><br>
<span class="quotelev2">&gt;&gt;details.
</span><br>
<span class="quotelev2">&gt;&gt;This GDB was configured as &quot;x86_64-suse-linux&quot;...Using host 
</span><br>
<span class="quotelev2">&gt;&gt;libthread_db library &quot;/lib64/tls/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;(gdb) run
</span><br>
<span class="quotelev2">&gt;&gt;Starting program: /home/ndebard/ptp/sub_test
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev2">&gt;&gt;0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt;(gdb) where
</span><br>
<span class="quotelev2">&gt;&gt;#0  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt;#1  0x00000000004598a5 in orte_init_stage1 () at orte_init_stage1.c:419
</span><br>
<span class="quotelev2">&gt;&gt;#2  0x00000000004155cf in orte_system_init () at orte_system_init.c:38
</span><br>
<span class="quotelev2">&gt;&gt;#3  0x00000000004150ef in orte_init () at orte_init.c:46
</span><br>
<span class="quotelev2">&gt;&gt;#4  0x00000000004148a1 in main (argc=1, argv=0x7fbffff178) at 
</span><br>
<span class="quotelev2">&gt;&gt;sub_test.c:60
</span><br>
<span class="quotelev2">&gt;&gt;(gdb) 
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Yes, I recompiled everything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Here's an example of me trying something a little more complicated 
</span><br>
<span class="quotelev1">&gt;(which I believe locks up for the same reason - something borked with 
</span><br>
<span class="quotelev1">&gt;the registry interaction).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;[sparkplug]~/ompi-test &gt; bjssub -s 10000 -n 10 -i bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Waiting for interactive job nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;(nodes 18 16 17 18 19 20 21 22 23 24 25)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Starting interactive job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;NODES=16,17,18,19,20,21,22,23,24,25
</span><br>
<span class="quotelev3">&gt;&gt;&gt;JOBID=18
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;so i got my nodes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;ndebard_at_sparkplug:~/ompi-test&gt; export OMPI_MCA_ptl_base_exclude=sm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;ndebard_at_sparkplug:~/ompi-test&gt; export 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;OMPI_MCA_pls_bproc_seed_priority=101
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;and set these envvars like we need to use Greg's bproc, without the 
</span><br>
<span class="quotelev2">&gt;&gt;2nd export the machine's load maxes and locks up.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;ndebard_at_sparkplug:~/ompi-test&gt; bpstat
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Node(s)                            Status          Mode       
</span><br>
<span class="quotelev3">&gt;&gt;&gt;User     Group   100-128                            down            
</span><br>
<span class="quotelev3">&gt;&gt;&gt;---------- root     root    0-15                               
</span><br>
<span class="quotelev3">&gt;&gt;&gt;up              ---x------ vchandu  vchandu
</span><br>
<span class="quotelev3">&gt;&gt;&gt;16-25                              up              ---x------ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;ndebard  ndebard
</span><br>
<span class="quotelev3">&gt;&gt;&gt;26-27                              up              ---x------ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;root     root    28-30                              up              
</span><br>
<span class="quotelev3">&gt;&gt;&gt;---x--x--x root     root    ndebard_at_sparkplug:~/ompi-test&gt; env | grep 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;NODES
</span><br>
<span class="quotelev3">&gt;&gt;&gt;NODES=16,17,18,19,20,21,22,23,24,25
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;yes, i really have the nodes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;ndebard_at_sparkplug:~/ompi-test&gt; mpicc -o test-mpi test-mpi.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;ndebard_at_sparkplug:~/ompi-test&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;recompile for good measure
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;ndebard_at_sparkplug:~/ompi-test&gt; ls /tmp/openmpi-sessions-ndebard*
</span><br>
<span class="quotelev3">&gt;&gt;&gt;/bin/ls: /tmp/openmpi-sessions-ndebard*: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;proof that there's no left over old directory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;ndebard_at_sparkplug:~/ompi-test&gt; mpirun -np 1 test-mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;it never responds at this point - but I can kill it with ^C.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;mpirun: killing job...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Killed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;ndebard_at_sparkplug:~/ompi-test&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- Nathan
</span><br>
<span class="quotelev1">&gt;Correspondence
</span><br>
<span class="quotelev1">&gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev1">&gt;Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;Parallel Tools Team
</span><br>
<span class="quotelev1">&gt;High Performance Computing Environments
</span><br>
<span class="quotelev1">&gt;phone: 505-667-3428
</span><br>
<span class="quotelev1">&gt;email: ndebard_at_[hidden]
</span><br>
<span class="quotelev1">&gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Is this what Tim Prins was working on?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Aug 16, 2005, at 5:21 PM, Tim S. Woodall wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;I'm not sure why this is even building... Is someone working on this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;I thought we had .ompi_ignore files in this directory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Tim
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;So I'm seeing all these nice emails about people developing on OMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;today yet I can't get it to compile.  Am I out here in limbo on this 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;are others in the same boat?  The errors I'm seeing are about some 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;bproc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;code calling undefined functions and they are linked again below.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-- Nathan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Correspondence
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Los Alamos National Laboratory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Parallel Tools Team
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;High Performance Computing Environments
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;phone: 505-667-3428
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;email: ndebard_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Back from training and trying to test this but now OMPI doesn't 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;compile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;at all:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;gcc -DHAVE_CONFIG_H -I. -I. -I../../../../include
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;-I../../../../include -I../../../.. -I../../../..
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;-I../../../../include -I../../../../opal -I../../../../orte
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;-I../../../../ompi -g -Wall -Wundef -Wno-long-long -Wsign-compare
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;-Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;-Werror-implicit-function-declaration -fno-strict-aliasing -MT
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;ras_lsf_bproc.lo -MD -MP -MF .deps/ras_lsf_bproc.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;ras_lsf_bproc.c -o ras_lsf_bproc.o
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;ras_lsf_bproc.c: In function `orte_ras_lsf_bproc_node_insert':
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;ras_lsf_bproc.c:32: error: implicit declaration of function
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;`orte_ras_base_node_insert'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;ras_lsf_bproc.c: In function `orte_ras_lsf_bproc_node_query':
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;ras_lsf_bproc.c:37: error: implicit declaration of function
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;`orte_ras_base_node_query'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;make[4]: *** [ras_lsf_bproc.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;make[4]: Leaving directory 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;`/home/ndebard/ompi/orte/mca/ras/lsf_bproc'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;make[3]: Leaving directory `/home/ndebard/ompi/orte/mca/ras'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;make[2]: Leaving directory `/home/ndebard/ompi/orte/mca'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;make[1]: Leaving directory `/home/ndebard/ompi/orte'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;[sparkplug]~/ompi &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;            
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Clean SVN checkout this morning with configure:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;[sparkplug]~/ompi &gt; ./configure --enable-static --disable-shared
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;--without-threads --prefix=/home/ndebard/local/ompi 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;--with-devel-headers
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;            
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;-- Nathan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Correspondence
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Nathan DeBardeleben, Ph.D.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Parallel Tools Team
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;High Performance Computing Environments
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;phone: 505-667-3428
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;email: ndebard_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;This is now fixed in SVN.  You should no longer need the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;--build=i586...  hack to compile 32 bit code on Opterons.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;Brian
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;On Aug 12, 2005, at 3:17 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;            
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;On Aug 12, 2005, at 3:13 PM, Nathan DeBardeleben wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;              
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;We've got a 64bit Linux (SUSE) box here.  For a variety of reasons
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;(Java, JNI, linking in with OMPI libraries, etc which I won't get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;into)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;I need to compile OMPI 32 bit (or get 64bit versions of a lot of 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;other
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;libraries).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;I get various compile errors when I try different things, but 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;first
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;let
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;me explain the system we have:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&lt;snip&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;              
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;This goes on and on and on actually.  And the 'is incompatible 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;i386:x86-64 output' looks to be repeated for every line before 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;error which actually caused the Make to bomb.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;Any suggestions at all?  Surely someone must have tried to force
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;OMPI to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;build in 32bit mode on a 64bit machine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;I don't think anyone has tried to build 32 bit on an Opteron, which
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;is the cause of the problems...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;I think I know how to fix this, but won't happen until later in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;weekend.  I can't think of a good workaround until then.  Well, one
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;possibility is to set the target like you were doing and disable
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;ROMIO.  Actually, you'll also need to disable Fortran 77.  So
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;something like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;./configure [usual options] --build=i586-suse-linux --disable-io-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;romio --disable-f77
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;might just do the trick.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;-- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;Brian Barrett
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;Open MPI developer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;              
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0176.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0174.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>In reply to:</strong> <a href="0174.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0179.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0179.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
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
