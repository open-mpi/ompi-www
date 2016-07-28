<?
$subject_val = "[OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 10 14:56:56 2015" -->
<!-- isoreceived="20150410185656" -->
<!-- sent="Fri, 10 Apr 2015 14:55:50 -0400" -->
<!-- isosent="20150410185550" -->
<!-- name="Andy Riebs" -->
<!-- email="andy.riebs_at_[hidden]" -->
<!-- subject="[OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC" -->
<!-- id="55281CB6.4030004_at_hp.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC<br>
<strong>From:</strong> Andy Riebs (<em>andy.riebs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-10 14:55:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26671.php">namu patel: "[OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<li><strong>Previous message:</strong> <a href="26669.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26676.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26676.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->

  <head>

    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
  </head>
  <body bgcolor="#FFFFFF" text="#000000">
    Summary: MPI jobs work fine, SHMEM jobs work just often enough to be
    tantalizing, on an Intel Xeon Phi/MIC system.<br>
    <br>
    Longer version<br>
    <br>
    Thanks to the excellent write-up last June
    (<a class="moz-txt-link-rfc2396E" href="https://www.open-mpi.org/community/lists/users/2014/06/24711.php">&lt;https://www.open-mpi.org/community/lists/users/2014/06/24711.php&gt;</a>),
    I have been able to build a version of Open MPI for the Xeon Phi
    coprocessor that runs MPI jobs on the Phi coprocessor with no
    problem, but not SHMEM jobs.  Just at the point where I was about to
    document the problems I was having with SHMEM, my trivial SHMEM job
    worked. And then failed when I tried to run it again, immediately
    afterwards. I have a feeling I may be in uncharted  territory here.<br>
    <br>
    Environment<br>
    <ul>
      <li>RHEL 6.5</li>
      <li>Intel Composer XE 2015</li>
      <li>Xeon Phi/MIC</li>
    </ul>
    ----------------<br>
    <br>
    <br>
    Configuration<br>
    <br>
    $ export PATH=/usr/linux-k1om-4.7/bin/:$PATH<br>
    $ source /opt/intel/15.0/composer_xe_2015/bin/compilervars.sh
    intel64<br>
    $ ./configure --prefix=/home/ariebs/mic/mpi \<br>
       CC="icc -mmic" CXX="icpc -mmic" \<br>
       --build=x86_64-unknown-linux-gnu --host=x86_64-k1om-linux \<br>
        AR=x86_64-k1om-linux-ar RANLIB=x86_64-k1om-linux-ranlib \<br>
        LD=x86_64-k1om-linux-ld \<br>
        --enable-mpirun-prefix-by-default --disable-io-romio \<br>
        --disable-vt --disable-mpi-fortran \<br>
        --enable-mca-no-build=btl-usnic,btl-openib,common-verbs<br>
    $ make<br>
    $ make install<br>
    <br>
    ----------------<br>
    <br>
    Test program<br>
    <br>
    #include &lt;stdio.h&gt;<br>
    #include &lt;stdlib.h&gt;<br>
    #include &lt;shmem.h&gt;<br>
    int main(int argc, char **argv)<br>
    {<br>
            int me, num_pe;<br>
            shmem_init();<br>
            num_pe = num_pes();<br>
            me = my_pe();<br>
            printf("Hello World from process %ld of %ld\n", me, num_pe);<br>
            exit(0);<br>
    }<br>
    <br>
    ----------------<br>
    <br>
    Building the program<br>
    <br>
    export PATH=/home/ariebs/mic/mpi/bin:$PATH<br>
    export PATH=/usr/linux-k1om-4.7/bin/:$PATH<br>
    source /opt/intel/15.0/composer_xe_2015/bin/compilervars.sh intel64<br>
    export
LD_LIBRARY_PATH=/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic:$LD_LIBRARY_PATH<br>
    <br>
    icc -mmic -std=gnu99 -I/home/ariebs/mic/mpi/include -pthread \<br>
            -Wl,-rpath -Wl,/home/ariebs/mic/mpi/lib
    -Wl,--enable-new-dtags \<br>
            -L/home/ariebs/mic/mpi/lib -loshmem -lmpi -lopen-rte
    -lopen-pal \<br>
            -lm -ldl -lutil \<br>
            -Wl,-rpath
    -Wl,/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic \<br>
            -L/opt/intel/15.0/composer_xe_2015.2.164/compiler/lib/mic \<br>
            -o mic.out  shmem_hello.c<br>
    <br>
    ----------------<br>
    <br>
    Running the program<br>
    <br>
    (Note that the program had been consistently failing. Then, when I
    logged back into the system to capture the results, it worked once, 
    and then immediately failed when I tried again, as shown below.
    Logging in and out isn't sufficient to correct the problem. Overall,
    I think I had 3 successful runs in 30-40 attempts.)<br>
    <br>
    $ shmemrun -H localhost -N 2 --mca sshmem mmap ./mic.out<br>
    [atl1-01-mic0:189372] [[30936,0],0] ORTE_ERROR_LOG: Not found in
    file base/plm_base_launch_support.c at line 426<br>
    Hello World from process 0 of 2<br>
    Hello World from process 1 of 2<br>
    $ shmemrun -H localhost -N 2 --mca sshmem mmap ./mic.out<br>
    [atl1-01-mic0:189381] [[30881,0],0] ORTE_ERROR_LOG: Not found in
    file base/plm_base_launch_support.c at line 426<br>
    [atl1-01-mic0:189383] Error: pshmem_init.c:61 - shmem_init() SHMEM
    failed to initialize - aborting<br>
--------------------------------------------------------------------------<br>
    It looks like SHMEM_INIT failed for some reason; your parallel
    process is<br>
    likely to abort.  There are many reasons that a parallel process can<br>
    fail during SHMEM_INIT; some of which are due to configuration or
    environment<br>
    problems.  This failure appears to be an internal failure; here's
    some<br>
    additional information (which may only be relevant to an Open SHMEM<br>
    developer):<br>
    <br>
      mca_memheap_base_select() failed<br>
      --&gt; Returned "Error" (-1) instead of "Success" (0)<br>
--------------------------------------------------------------------------<br>
--------------------------------------------------------------------------<br>
    SHMEM_ABORT was invoked on rank 0 (pid 189383, host=atl1-01-mic0)
    with errorcode -1.<br>
--------------------------------------------------------------------------<br>
--------------------------------------------------------------------------<br>
    A SHMEM process is aborting at a time when it cannot guarantee that
    all<br>
    of its peer processes in the job will be killed properly.  You
    should<br>
    double check that everything has shut down cleanly.<br>
    <br>
    Local host: atl1-01-mic0<br>
    PID:        189383<br>
--------------------------------------------------------------------------<br>
    -------------------------------------------------------<br>
    Primary job  terminated normally, but 1 process returned<br>
    a non-zero exit code.. Per user-direction, the job has been aborted.<br>
    -------------------------------------------------------<br>
--------------------------------------------------------------------------<br>
    shmemrun detected that one or more processes exited with non-zero
    status, thus causing<br>
    the job to be terminated. The first process to do so was:<br>
    <br>
      Process name: [[30881,1],0]<br>
      Exit code:    255<br>
--------------------------------------------------------------------------<br>
    <br>
    Any thoughts about where to go from here?<br>
    <br>
    Andy<br>
    <br>
    <pre class="moz-signature" cols="72">-- 
Andy Riebs
Hewlett-Packard Company
High Performance Computing
+1 404 648 9024
My opinions are not necessarily those of HP
</pre>
  </body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26671.php">namu patel: "[OMPI users] OpenMPI is not using free processors, but overloading other processors already at 100%"</a>
<li><strong>Previous message:</strong> <a href="26669.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26676.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="26676.php">Ralph Castain: "Re: [OMPI users] Problems using Open MPI 1.8.4 OSHMEM on Intel Xeon Phi/MIC"</a>
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
