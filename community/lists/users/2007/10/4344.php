<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 29 15:07:53 2007" -->
<!-- isoreceived="20071029190753" -->
<!-- sent="Mon, 29 Oct 2007 19:08:01 -0000" -->
<!-- isosent="20071029190801" -->
<!-- name="Tim Reis" -->
<!-- email="reis_at_[hidden]" -->
<!-- subject="[OMPI users] MUMPS Linking Problems" -->
<!-- id="003901c81a5f$070718a0$0200a8c0_at_Timo" -->
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
<strong>From:</strong> Tim Reis (<em>reis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-29 15:08:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4345.php">Damien Hocking: "Re: [OMPI users] MUMPS Linking Problems"</a>
<li><strong>Previous message:</strong> <a href="4343.php">Jorge Parra: "[OMPI users] Error initializing openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4345.php">Damien Hocking: "Re: [OMPI users] MUMPS Linking Problems"</a>
<li><strong>Reply:</strong> <a href="4345.php">Damien Hocking: "Re: [OMPI users] MUMPS Linking Problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Mailing list, 
<br>
<p><p>I'm trying to build my program that makes use of MUMPS but I keep getting the 
<br>
following error messages: 
<br>
<p><p>/snoopyhome/ucahhwi/MUMPS_4.5.4/lib/libdmumps.a(dmumps_orderings.o) 
<br>
(.text+0x13b): In function `dmumps_pord': 
<br>
: undefined reference to `SPACE_ordering' 
<br>
/snoopyhome/ucahhwi/MUMPS_4.5.4/lib/libdmumps.a(dmumps_orderings.o) 
<br>
(.text+0x209): In function `dmumps_pord': 
<br>
: undefined reference to `firstPostorder' 
<br>
/snoopyhome/ucahhwi/MUMPS_4.5.4/lib/libdmumps.a(dmumps_orderings.o) 
<br>
(.text+0x2bd): In function `dmumps_pord': 
<br>
: undefined reference to `nextPostorder' 
<br>
/snoopyhome/ucahhwi/MUMPS_4.5.4/lib/libdmumps.a(dmumps_orderings.o) 
<br>
(.text+0x2f8): In function `dmumps_pord': 
<br>
: undefined reference to `freeElimTree' 
<br>
/snoopyhome/ucahhwi/MUMPS_4.5.4/lib/libdmumps.a(dmumps_orderings.o) 
<br>
(.text+0x4a4): In function `dmumps_pord_wnd': 
<br>
: undefined reference to `SPACE_ordering' 
<br>
/snoopyhome/ucahhwi/MUMPS_4.5.4/lib/libdmumps.a(dmumps_orderings.o) 
<br>
(.text+0x577): In function `dmumps_pord_wnd': 
<br>
: undefined reference to `firstPostorder' 
<br>
/snoopyhome/ucahhwi/MUMPS_4.5.4/lib/libdmumps.a(dmumps_orderings.o) 
<br>
(.text+0x623): In function `dmumps_pord_wnd': 
<br>
: undefined reference to `nextPostorder' 
<br>
/snoopyhome/ucahhwi/MUMPS_4.5.4/lib/libdmumps.a(dmumps_orderings.o) 
<br>
(.text+0x65e): In function `dmumps_pord_wnd': 
<br>
: undefined reference to `freeElimTree' 
<br>
<p><p>The command line I'm using looks a little bit like this: 
<br>
<p><p>mpif90 helentest.F link_to_MUMPS link_to_scalapack link_to_BLACS 
<br>
link_to_lapack -o helentest 
<br>
<p><p>Any help will be much appreciated. 
<br>
Best wishes, 
<br>
Tim 
<br>
<p><p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4344/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4345.php">Damien Hocking: "Re: [OMPI users] MUMPS Linking Problems"</a>
<li><strong>Previous message:</strong> <a href="4343.php">Jorge Parra: "[OMPI users] Error initializing openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4345.php">Damien Hocking: "Re: [OMPI users] MUMPS Linking Problems"</a>
<li><strong>Reply:</strong> <a href="4345.php">Damien Hocking: "Re: [OMPI users] MUMPS Linking Problems"</a>
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
