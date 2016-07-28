<?
$subject_val = "[OMPI users] Open MPI collectives algorithm selection";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 10 09:04:24 2015" -->
<!-- isoreceived="20150310130424" -->
<!-- sent="Tue, 10 Mar 2015 13:04:24 +0000" -->
<!-- isosent="20150310130424" -->
<!-- name="Khalid Hasanov" -->
<!-- email="xalid.h_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI collectives algorithm selection" -->
<!-- id="CABb4ZDdvhe++ChuxBNp5F+tHpqiBQBhE0DcJgdinzKWtY+WRMw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI collectives algorithm selection<br>
<strong>From:</strong> Khalid Hasanov (<em>xalid.h_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-10 09:04:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26447.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="26445.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to compile without ib support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26447.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="26447.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I would like to know if Open MPI provides some kind of mechanism to select
<br>
collective algorithms such as MPI broadcast during run time depending on
<br>
some logic. For example, I would like to
<br>
use something like this:
<br>
<p>if (some_condition)  ompi_binomial_broadcast(...);
<br>
else   ompi_pipeline_broadcast(...);
<br>
<p>I know it is possible to use some fixed algorithm by
<br>
coll_tuned_use_dynamic_rules
<br>
or to define a custom selection rule using coll_tuned_dynamic_rules_filename.
<br>
But
<br>
I think it is not suitable in this situation as the dynamic rules mainly
<br>
based on the message size, segment size and communicator size.
<br>
<p>Another option could be using Open MPI internal APIS like
<br>
<p>ompi_coll_tuned_bcast_intra_binomial( buf, count, dtype, root, comm,
<br>
module, segsize);
<br>
<p>But it highly depends on Open MPI internals as it uses
<br>
mca_coll_base_module_t .
<br>
<p>Is there any better option? (except using my own implementation of
<br>
collectives)
<br>
<p>Any suggestion highly appreciated.
<br>
<p>Thanks
<br>
<p>Regards,
<br>
Khalid
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26446/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26447.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="26445.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to compile without ib support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26447.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="26447.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
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
