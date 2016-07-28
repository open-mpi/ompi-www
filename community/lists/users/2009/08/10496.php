<?
$subject_val = "[OMPI users] Program runs successfully...but with error messages displayed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 27 06:36:41 2009" -->
<!-- isoreceived="20090827103641" -->
<!-- sent="Thu, 27 Aug 2009 10:36:35 +0000 (GMT)" -->
<!-- isosent="20090827103635" -->
<!-- name="Jean Potsam" -->
<!-- email="jeanpotsam_at_[hidden]" -->
<!-- subject="[OMPI users] Program runs successfully...but with error messages displayed" -->
<!-- id="114756.53172.qm_at_web28310.mail.ukl.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Program runs successfully...but with error messages displayed<br>
<strong>From:</strong> Jean Potsam (<em>jeanpotsam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-27 06:36:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10497.php">Lenny Verkhovsky: "Re: [OMPI users] Program runs successfully...but with error messages displayed"</a>
<li><strong>Previous message:</strong> <a href="10495.php">Changsheng Jiang: "[OMPI users] MPI_File_open return error code 16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10497.php">Lenny Verkhovsky: "Re: [OMPI users] Program runs successfully...but with error messages displayed"</a>
<li><strong>Reply:</strong> <a href="10497.php">Lenny Verkhovsky: "Re: [OMPI users] Program runs successfully...but with error messages displayed"</a>
<li><strong>Reply:</strong> <a href="10499.php">Yann JOBIC: "Re: [OMPI users] Program runs successfully...but with error messages displayed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
&#160; &#160; &#160; &#160; &#160; &#160; &#160; I have installed openmpi 1.3.2 on one on the nodes of our cluster and is running a simple helloword mpi program. The program runs fine but I get a lot of unexpected messages in between the result. 
<br>
<p>##########################################
<br>
<p>jean_at_n06:~/examples$ mpirun -np 2 --host n06 hello_c
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
--------------------------------------------------------------------------
<br>
[[11410,1],1]: A high-performance Open MPI point-to-point messaging module
<br>
was unable to find any relevant network interfaces:
<br>
<p>Module: OpenFabrics (openib)
<br>
&#160; Host: n06
<br>
<p>Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
<p>Hello, world, I am 0 of 2 and running on n06
<br>
Hello, world, I am 1 of 2 and running on n06
<br>
<p><p>[n06:08470] 1 more process has sent help message help-mpi-btl-base.txt / btl:no-nics
<br>
[n06:08470] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
<p>##########################
<br>
<p>Does anyone know why these messages appear and how to fix this.
<br>
<p><p><p>Jean
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10496/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10497.php">Lenny Verkhovsky: "Re: [OMPI users] Program runs successfully...but with error messages displayed"</a>
<li><strong>Previous message:</strong> <a href="10495.php">Changsheng Jiang: "[OMPI users] MPI_File_open return error code 16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10497.php">Lenny Verkhovsky: "Re: [OMPI users] Program runs successfully...but with error messages displayed"</a>
<li><strong>Reply:</strong> <a href="10497.php">Lenny Verkhovsky: "Re: [OMPI users] Program runs successfully...but with error messages displayed"</a>
<li><strong>Reply:</strong> <a href="10499.php">Yann JOBIC: "Re: [OMPI users] Program runs successfully...but with error messages displayed"</a>
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
