<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  8 03:56:52 2006" -->
<!-- isoreceived="20060208085652" -->
<!-- sent="Wed, 8 Feb 2006 10:55:46 +0200" -->
<!-- isosent="20060208085546" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="compilation problem" -->
<!-- id="20060208085546.GA3671_at_minantech.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-08 03:55:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0720.php">Ralph H. Castain: "Re:  compilation problem"</a>
<li><strong>Previous message:</strong> <a href="0718.php">Ralph H. Castain: "Re:  Alpha 4 and job state transitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0720.php">Ralph H. Castain: "Re:  compilation problem"</a>
<li><strong>Reply:</strong> <a href="0720.php">Ralph H. Castain: "Re:  compilation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello I have problem to compile latest trunk event after running
<br>
./autogen.sh.
<br>
I've got the following error:
<br>
<p>&nbsp;gcc -DHAVE_CONFIG_H -I. -I../../../../ompi/orte/mca/ns
<br>
&nbsp;-I../../../include -I../../../include -I../../../../ompi/include
<br>
&nbsp;-I../../../../ompi -I../../.. -I../../../include
<br>
&nbsp;-I../../../../ompi/opal -I../../../../ompi/orte -I../../../../ompi/ompi
<br>
&nbsp;-O3 -DNDEBUG -fno-strict-aliasing -pthread -MT
<br>
&nbsp;base/ns_base_local_fns.lo -MD -MP -MF base/.deps/ns_base_local_fns.Tpo
<br>
&nbsp;-c ../../../../ompi/orte/mca/ns/base/ns_base_local_fns.c  -fPIC -DPIC
<br>
&nbsp;-o base/.libs/ns_base_local_fns.o
<br>
&nbsp;make[2]: *** No rule to make target
<br>
&nbsp;`base/data_type_support/ns_data_type_compare_fns.c', needed by
<br>
&nbsp;`base/data_type_support/ns_data_type_compare_fns.lo'.  Stop.
<br>
&nbsp;make[2]: Leaving directory
<br>
&nbsp;`/export/home/glebn/OpenMPI/build/orte/mca/ns'
<br>
&nbsp;make[1]: *** [all-recursive] Error 1
<br>
&nbsp;make[1]: Leaving directory `/export/home/glebn/OpenMPI/build/orte'
<br>
&nbsp;make: *** [all-recursive] Error 1
<br>
<p>Thanks,
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0720.php">Ralph H. Castain: "Re:  compilation problem"</a>
<li><strong>Previous message:</strong> <a href="0718.php">Ralph H. Castain: "Re:  Alpha 4 and job state transitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0720.php">Ralph H. Castain: "Re:  compilation problem"</a>
<li><strong>Reply:</strong> <a href="0720.php">Ralph H. Castain: "Re:  compilation problem"</a>
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
