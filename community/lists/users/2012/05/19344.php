<?
$subject_val = "Re: [OMPI users] openmpi-1.6 undefined reference";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 16:16:05 2012" -->
<!-- isoreceived="20120523201605" -->
<!-- sent="Wed, 23 May 2012 22:15:58 +0200" -->
<!-- isosent="20120523201558" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.6 undefined reference" -->
<!-- id="4FBD457E.90402_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="EB11070D-960E-4996-8E9E-18D5972DD2A3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.6 undefined reference<br>
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 16:15:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19345.php">Bennet Fauber: "[OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19343.php">Simone Pellegrini: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<li><strong>In reply to:</strong> <a href="19336.php">Ralph Castain: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/23/2012 2:08 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Add &quot;libompitrace&quot; to your enable-contrib-no-build list. There is likely a missing include in there, but you don't need that lib to run. We'll take a look at it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>thanks.
<br>
build was fine and check passed almost all
<br>
<p>from &quot;grep -i pass openmpi-1.6-1-check.log&quot;
<br>
--------------------------------------------
<br>
PASS: predefined_gap_test.exe
<br>
File opened with dladvise_local, all passed
<br>
PASS: dlopen_test.exe
<br>
All 2 tests passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
PASS: atomic_barrier.exe
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
PASS: atomic_barrier_noinline.exe
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
PASS: atomic_spinlock.exe
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
PASS: atomic_spinlock_noinline.exe
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
PASS: atomic_math.exe
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
PASS: atomic_math_noinline.exe
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
PASS: atomic_cmpset.exe
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
PASS: atomic_cmpset_noinline.exe
<br>
All 8 tests passed
<br>
All 0 tests passed
<br>
All 0 tests passed
<br>
/pub/devel/openmpi/openmpi-1.6-1/src/openmpi-1.6/test/datatype/opal_datatype_test.c:533:5: 
<br>
warning: passing argument 1 of &#145;test_create_blacs_type1&#146; discards 
<br>
qualifiers from pointer target type
<br>
/pub/devel/openmpi/openmpi-1.6-1/src/openmpi-1.6/test/datatype/opal_datatype_test.c:534:5: 
<br>
warning: passing argument 1 of &#145;test_create_blacs_type2&#146; discards 
<br>
qualifiers from pointer target type
<br>
/pub/devel/openmpi/openmpi-1.6-1/src/openmpi-1.6/test/datatype/opal_ddt_lib.c:155:5: 
<br>
warning: passing argument 4 of &#145;opal_datatype_create_struct&#146; from 
<br>
incompatible pointer type
<br>
decode [PASSED]
<br>
PASS: opal_datatype_test.exe
<br>
PASS: checksum.exe
<br>
PASS: position.exe
<br>
decode [PASSED]
<br>
PASS: ddt_test.exe
<br>
<p>decode [NOT PASSED]           &lt;&lt;&lt;&lt;&lt;&lt;&lt; ?
<br>
<p>PASS: ddt_raw.exe
<br>
All 5 tests passed
<br>
SUPPORT: OMPI Test Passed: opal_path_nfs(): (0 tests)
<br>
PASS: opal_path_nfs.exe
<br>
1 test passed
<br>
----------------------------------------
<br>
<p><p>the detailed log is not more clear, I do not understand if the
<br>
test is passed or not
<br>
<p>----------------------------------------
<br>
<p>#
<br>
&nbsp;&nbsp;* TEST INVERSED VECTOR
<br>
&nbsp;&nbsp;#
<br>
<p>raw extraction in 0 microsec
<br>
<p><p>#
<br>
&nbsp;&nbsp;* TEST STRANGE DATATYPE
<br>
&nbsp;&nbsp;#
<br>
<p><p>Strange datatype BEFORE COMMIT
<br>
<p>Strange datatype AFTER COMMIT
<br>
raw extraction in 0 microsec
<br>
<p><p>#
<br>
&nbsp;&nbsp;* TEST UPPER TRIANGULAR MATRIX (size 100)
<br>
&nbsp;&nbsp;#
<br>
<p>raw extraction in 0 microsec
<br>
Example 3.26 type1 correct
<br>
Example 3.26 type1 correct
<br>
Example 3.26 type2 correct
<br>
type3 correct
<br>
hindexed ok
<br>
indexed ok
<br>
hvector ok
<br>
vector ok
<br>
<p><p>#
<br>
&nbsp;&nbsp;* TEST UPPER MATRIX
<br>
&nbsp;&nbsp;#
<br>
<p>test upper matrix
<br>
complete raw in 0 microsec
<br>
decode [NOT PASSED]
<br>
<p><p>#
<br>
&nbsp;&nbsp;* TEST MATRIX BORDERS
<br>
&nbsp;&nbsp;#
<br>
<p><p><p>#
<br>
&nbsp;&nbsp;* TEST CONTIGUOUS
<br>
&nbsp;&nbsp;#
<br>
<p>test contiguous (alignement)
<br>
<p><p>#
<br>
&nbsp;&nbsp;* TEST STRUCT
<br>
&nbsp;&nbsp;#
<br>
<p>test struct
<br>
<span class="quotelev2"> &gt;&gt;--------------------------------------------&lt;&lt;
</span><br>
<span class="quotelev2"> &gt;&gt;--------------------------------------------&lt;&lt;
</span><br>
<span class="quotelev2"> &gt;&gt;--------------------------------------------&lt;&lt;
</span><br>
<span class="quotelev2"> &gt;&gt;--------------------------------------------&lt;&lt;
</span><br>
&nbsp;&nbsp;Contiguous data-type (MPI_DOUBLE)
<br>
raw extraction in 0 microsec
<br>
<span class="quotelev2"> &gt;&gt;--------------------------------------------&lt;&lt;
</span><br>
<span class="quotelev2"> &gt;&gt;--------------------------------------------&lt;&lt;
</span><br>
Contiguous multiple data-type (4500*1)
<br>
raw extraction in 0 microsec
<br>
Contiguous multiple data-type (450*10)
<br>
raw extraction in 0 microsec
<br>
Contiguous multiple data-type (45*100)
<br>
raw extraction in 0 microsec
<br>
Contiguous multiple data-type (100*45)
<br>
raw extraction in 0 microsec
<br>
Contiguous multiple data-type (10*450)
<br>
raw extraction in 0 microsec
<br>
Contiguous multiple data-type (1*4500)
<br>
raw extraction in 0 microsec
<br>
<span class="quotelev2"> &gt;&gt;--------------------------------------------&lt;&lt;
</span><br>
<span class="quotelev2"> &gt;&gt;--------------------------------------------&lt;&lt;
</span><br>
Vector data-type (450 times 10 double stride 11)
<br>
raw extraction in 0 microsec
<br>
<span class="quotelev2"> &gt;&gt;--------------------------------------------&lt;&lt;
</span><br>
<span class="quotelev2"> &gt;&gt;--------------------------------------------&lt;&lt;
</span><br>
Vector data-type (450 times 10 double stride 11)
<br>
raw extraction in 0 microsec
<br>
<span class="quotelev2"> &gt;&gt;--------------------------------------------&lt;&lt;
</span><br>
<span class="quotelev2"> &gt;&gt;--------------------------------------------&lt;&lt;
</span><br>
raw extraction in 1000 microsec
<br>
<span class="quotelev2"> &gt;&gt;--------------------------------------------&lt;&lt;
</span><br>
<span class="quotelev2"> &gt;&gt;--------------------------------------------&lt;&lt;
</span><br>
raw extraction in 0 microsec
<br>
<span class="quotelev2"> &gt;&gt;--------------------------------------------&lt;&lt;
</span><br>
<span class="quotelev2"> &gt;&gt;--------------------------------------------&lt;&lt;
</span><br>
raw extraction in 2000 microsec
<br>
<span class="quotelev2"> &gt;&gt;--------------------------------------------&lt;&lt;
</span><br>
<span class="quotelev2"> &gt;&gt;--------------------------------------------&lt;&lt;
</span><br>
raw extraction in 0 microsec
<br>
<span class="quotelev2"> &gt;&gt;--------------------------------------------&lt;&lt;
</span><br>
PASS: ddt_raw.exe
<br>
==================
<br>
All 5 tests passed
<br>
==================
<br>
-----------------------------
<br>
<p>Regards
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19345.php">Bennet Fauber: "[OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19343.php">Simone Pellegrini: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<li><strong>In reply to:</strong> <a href="19336.php">Ralph Castain: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
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
