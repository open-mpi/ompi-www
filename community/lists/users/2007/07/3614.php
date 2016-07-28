<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 10:53:11 2007" -->
<!-- isoreceived="20070710145311" -->
<!-- sent="Tue, 10 Jul 2007 14:53:07 +0000" -->
<!-- isosent="20070710145307" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] DataTypes with &amp;quot;holes&amp;quot; for writing files" -->
<!-- id="9b0da5ce0707100753s8cefc39w1d1daa6bd5912cc7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-10 10:53:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3615.php">George Bosilca: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Previous message:</strong> <a href="3613.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3615.php">George Bosilca: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Reply:</strong> <a href="3615.php">George Bosilca: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi
<br>
I want to create datatypes of the form
<br>
XX000000...
<br>
00XX0000...
<br>
0000XX00...
<br>
etc.
<br>
<p>I tried MPI_Type_indexed(1, ais, ait, MPI_SHORT, &amp;dtNewType)
<br>
where ais= {2} and ait = {2} but this only gives me a datatype of the form
<br>
00XX, i.e. no holes at the end.
<br>
<p>I guess MPI_Type_vector won't work, because there seems to be
<br>
no way to create holes at the beginning of the datatype
<br>
<p><p>I need these datatypes to let each process write its data into the file
<br>
in the following way:
<br>
XXYYZZXXYYZZXXYYZZ....
<br>
(X is data from proc 0, Y is data from proc 1,  Z is data from proc 2)
<br>
<p>My intended approach was to define  datatypes of the form XX0000, 00XX00,
<br>
0000XX
<br>
for the respective processors, and then  call  MPI_File_set_view
<br>
with displacement 0 and the respective datatypes fo the &quot;filetype&quot;
<br>
parameter,
<br>
and finally let each  processor write its stuff to file sequentially using
<br>
MPI_File_write.
<br>
<p>However, my plan failed since i am unable to create datatypes with holes in
<br>
front and at the end.
<br>
<p>What function should i use to create the desired datatypes?
<br>
<p>Thank You
<br>
<p>&nbsp;&nbsp;Jody
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3614/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3615.php">George Bosilca: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Previous message:</strong> <a href="3613.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3615.php">George Bosilca: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Reply:</strong> <a href="3615.php">George Bosilca: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
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
