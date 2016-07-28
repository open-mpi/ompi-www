<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  1 14:13:32 2006" -->
<!-- isoreceived="20060501181332" -->
<!-- sent="Mon, 1 May 2006 11:13:57 -0700" -->
<!-- isosent="20060501181357" -->
<!-- name="Brignone, Sergio" -->
<!-- email="sbrignone_at_[hidden]" -->
<!-- subject="[OMPI users] F77 in AIX" -->
<!-- id="04260B711FDCB041A3AFD3476C1D7E14043449_at_sacexm01.nexant.corp" -->
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
<strong>From:</strong> Brignone, Sergio (<em>sbrignone_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-01 14:13:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1177.php">Brian Barrett: "Re: [OMPI users] stdout in AIX"</a>
<li><strong>Previous message:</strong> <a href="1175.php">Brignone, Sergio: "[OMPI users] stdout in AIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1186.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] F77 in AIX"</a>
<li><strong>Maybe reply:</strong> <a href="1186.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] F77 in AIX"</a>
<li><strong>Maybe reply:</strong> <a href="1196.php">Brignone, Sergio: "Re: [OMPI users] F77 in AIX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to compile a FORTRAN 77 test case and it failed when linking:
<br>
<p>%&gt;mpif77 -o fpi fpi.f
<br>
&quot;/usr/local/include/mpif.h&quot;, line 64.38: 1515-009 (E) Null literal
<br>
string is not permitted.  A single blank is assumed.
<br>
** main   === End of Compilation 1 ===
<br>
1501-510  Compilation successful for file fpi.f.
<br>
ld: 0711-317 ERROR: Undefined symbol: .mpi_init
<br>
ld: 0711-317 ERROR: Undefined symbol: .mpi_comm_rank
<br>
ld: 0711-317 ERROR: Undefined symbol: .mpi_comm_size
<br>
ld: 0711-317 ERROR: Undefined symbol: .mpi_bcast
<br>
ld: 0711-317 ERROR: Undefined symbol: .mpi_reduce
<br>
ld: 0711-317 ERROR: Undefined symbol: .mpi_finalize
<br>
ld: 0711-345 Use the -bloadmap or -bnoquiet option to obtain more
<br>
information.
<br>
<p><p>Do you know how should I define the bindings to avoid this kind of
<br>
problems?
<br>
<p>Thanks
<br>
<p>Sergio
<br>
<p><p>*****************************************************************************
<br>
**                                                                         **
<br>
** WARNING:  This email contains an attachment of a very suspicious type.  **
<br>
** You are urged NOT to open this attachment unless you are absolutely     **
<br>
** sure it is legitmate.  Opening this attachment may cause irreparable    **
<br>
** damage to your computer and your files.  If you have any questions      **
<br>
** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
<br>
**                                                                         **
<br>
** This warning was added by the IU Computer Science Dept. mail scanner.   **
<br>
*****************************************************************************
<br>
<p><p>
<br><hr>
<ul>
<li>application/x-zip-compressed attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1176/f77.zip">f77.zip</a>
</ul>
<!-- attachment="f77.zip" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1177.php">Brian Barrett: "Re: [OMPI users] stdout in AIX"</a>
<li><strong>Previous message:</strong> <a href="1175.php">Brignone, Sergio: "[OMPI users] stdout in AIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1186.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] F77 in AIX"</a>
<li><strong>Maybe reply:</strong> <a href="1186.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] F77 in AIX"</a>
<li><strong>Maybe reply:</strong> <a href="1196.php">Brignone, Sergio: "Re: [OMPI users] F77 in AIX"</a>
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
