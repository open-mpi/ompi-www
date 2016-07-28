<?
$subject_val = "[OMPI users] Problem with connecting to 3 or more nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 16 15:29:39 2015" -->
<!-- isoreceived="20150116202939" -->
<!-- sent="Fri, 16 Jan 2015 20:29:37 +0000" -->
<!-- isosent="20150116202937" -->
<!-- name="Chan, Elbert" -->
<!-- email="EChan_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with connecting to 3 or more nodes" -->
<!-- id="f4f51ccc084d4918badcb4837a1560c8_at_exch-mbx4.csuchico.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Problem with connecting to 3 or more nodes<br>
<strong>From:</strong> Chan, Elbert (<em>EChan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-16 15:29:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26208.php">George Bosilca: "Re: [OMPI users] How to handle strides in MPI_Create_type_subarray - Re: MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Previous message:</strong> <a href="26206.php">Gus Correa: "[OMPI users] How to handle strides in MPI_Create_type_subarray - Re: MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26209.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with connecting to 3 or more nodes"</a>
<li><strong>Reply:</strong> <a href="26209.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with connecting to 3 or more nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I'm hoping that someone will be able to help me figure out a problem with connecting to multiple nodes with v1.8.4. 
<br>
<p>Currently, I'm running into this issue:
<br>
$ mpirun --host host1 hostname
<br>
host1
<br>
<p>$ mpirun --host host2,host3 hostname
<br>
host2
<br>
host3
<br>
<p>Running this command on 1 or 2 nodes generates the expected result. However:
<br>
$ mpirun --host host1,host2,host3 hostname
<br>
Permission denied, please try again.
<br>
Permission denied, please try again.
<br>
Permission denied (publickey,password,keyboard-interactive).
<br>
--------------------------------------------------------------------------
<br>
ORTE was unable to reliably start one or more daemons.
<br>
This usually is caused by:
<br>
<p>* not finding the required libraries and/or binaries on
<br>
&nbsp;&nbsp;one or more nodes. Please check your PATH and LD_LIBRARY_PATH
<br>
&nbsp;&nbsp;settings, or configure OMPI with --enable-orterun-prefix-by-default
<br>
<p>* lack of authority to execute on one or more specified nodes.
<br>
&nbsp;&nbsp;Please verify your allocation and authorities.
<br>
<p>* the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
<br>
&nbsp;&nbsp;Please check with your sys admin to determine the correct location to use.
<br>
<p>*  compilation of the orted with dynamic libraries when static are required
<br>
&nbsp;&nbsp;(e.g., on Cray). Please check your configure cmd line and consider using
<br>
&nbsp;&nbsp;one of the contrib/platform definitions for your system type.
<br>
<p>* an inability to create a connection back to mpirun due to a
<br>
&nbsp;&nbsp;lack of common network interfaces and/or no route found between
<br>
&nbsp;&nbsp;them. Please check network connectivity (including firewalls
<br>
&nbsp;&nbsp;and network routing requirements).
<br>
--------------------------------------------------------------------------
<br>
<p>This is set up with passwordless logins with passphrases/ssh-agent. When I run passphraseless, I get the expected result. 
<br>
<p>What am I doing wrong? What can I look at to see where my problem could be?
<br>
<p>Elbert
<br>
<p><pre>
--
********************************
Elbert Chan
Operating Systems Analyst
College of ECC
CSU, Chico
530-898-6481
********************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26208.php">George Bosilca: "Re: [OMPI users] How to handle strides in MPI_Create_type_subarray - Re: MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Previous message:</strong> <a href="26206.php">Gus Correa: "[OMPI users] How to handle strides in MPI_Create_type_subarray - Re: MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26209.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with connecting to 3 or more nodes"</a>
<li><strong>Reply:</strong> <a href="26209.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem with connecting to 3 or more nodes"</a>
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
