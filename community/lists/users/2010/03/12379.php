<?
$subject_val = "Re: [OMPI users] Signal code: Address not mapped (1) error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 18 08:26:49 2010" -->
<!-- isoreceived="20100318122649" -->
<!-- sent="Thu, 18 Mar 2010 14:26:43 +0200" -->
<!-- isosent="20100318122643" -->
<!-- name="alev mutlu" -->
<!-- email="koor230_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Signal code: Address not mapped (1) error" -->
<!-- id="d23942591003180526gbca80d3pd167220e287cdf4b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BA1F8FC.5070709_at_web.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Signal code: Address not mapped (1) error<br>
<strong>From:</strong> alev mutlu (<em>koor230_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-18 08:26:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12380.php">Josh Hursey: "Re: [OMPI users] can torque support  openmpi checkpoint?"</a>
<li><strong>Previous message:</strong> <a href="12378.php">Dorian Krause: "Re: [OMPI users] Signal code: Address not mapped (1) error"</a>
<li><strong>In reply to:</strong> <a href="12378.php">Dorian Krause: "Re: [OMPI users] Signal code: Address not mapped (1) error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh yes Dorian,
<br>
now it works!
<br>
<p>On Thu, Mar 18, 2010 at 11:57 AM, Dorian Krause &lt;doriankrause_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since you are using std::string in your structure you should allocate the
</span><br>
<span class="quotelev1">&gt; memory with &quot;new&quot; instead of &quot;malloc&quot;. Otherwise the constructor of
</span><br>
<span class="quotelev1">&gt; std::string is not called and things like the length() of a string might not
</span><br>
<span class="quotelev1">&gt; give the desired result leading boost to iterate over too many chars.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if this is the particular problem here but it might be ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Mar 17, 2010, at 6:11 AM, alev mutlu wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi the following codes compiles fine but gives some run time errors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ant suggestions to fix the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cheers
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Code
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/mpi/environment.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/mpi/communicator.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/mpi/collectives.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/thread/barrier.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/thread/mutex.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/config.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/archive/text_oarchive.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/archive/text_iarchive.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/serialization/access.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/serialization/string.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/mpi/skeleton_and_content.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/mpi/datatype.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/mpi/allocator.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/archive/tmpdir.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/serialization/utility.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/serialization/base_object.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/mpi.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/tokenizer.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/archive/tmpdir.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/archive/binary_oarchive.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/serialization/export.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/serialization/base_object.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/serialization/utility.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/serialization/hash_map.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;boost/serialization/map.hpp&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;string&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;iostream&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;vector&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include&lt;fstream&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define MASTER 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int arraySize = 7;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using namespace std;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; namespace mpi = boost::mpi;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; struct field {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     string field_name;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     string field_type;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     string field_ref;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     string field_colType;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; };
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; namespace boost {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     namespace serialization{
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         template&lt;class Archive&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         void serialize(Archive&amp;  ar, struct field&amp;  f,  unsigned int
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             ar&amp;  f.field_name;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             ar&amp;  f.field_type;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             ar&amp;  f.field_ref;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             ar&amp;  f.field_colType;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mpi::environment env(argc, argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mpi::communicator world;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int m_mySize, w_mySize, kk,i;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     struct field *relAllValues;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     struct field *relMyValues;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     vector&lt;struct field&gt;  C;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     struct field c;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     w_mySize = arraySize / world.size();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     cout&lt;&lt;  &quot;w_mySize = &quot;&lt;&lt;  w_mySize&lt;&lt;  endl;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (world.rank() == MASTER){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         for(int i = 0; i&lt;  arraySize; i++){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             c.field_name = &quot;field_name=&quot; ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             c.field_type = &quot;field_type=&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             c.field_ref = &quot;field_ref=&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             c.field_colType = &quot;field_colType=&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             C.push_back(c);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           m_mySize = arraySize / world.size() + arraySize % world.size();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         relMyValues = (struct field *) malloc(sizeof(struct field) *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; w_mySize);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         relAllValues = (struct field *) malloc(sizeof(struct field) *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arraySize);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       else{
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          relMyValues = (struct field *) malloc(sizeof(struct field) *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; w_mySize);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       if (world.rank() == MASTER){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           scatter(world, C, relMyValues, w_mySize, 0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       else{
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           scatter(world, C, relMyValues, w_mySize, 0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and the run time errors
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ceng34:00724] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ceng34:00724] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ceng34:00724] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ceng34:00724] Failing at address: 0xfffffffffffffff8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ceng34:00724] [ 0] /lib64/libpthread.so.0 [0x315880de80]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ceng34:00724] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib64/libstdc++.so.6(_ZN9__gnu_cxx18__exchange_and_addEPVii+0x2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x385dab7672]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ceng34:00724] [ 2] /usr/lib64/libstdc++.so.6(_ZNSs6assignERKSs+0x9b)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x385da9ca4b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ceng34:00724] [ 3] test-boost(_ZN5fieldaSERKS_+0x47) [0x42197f]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ceng34:00724] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test-boost(_ZNSt6__copyILb0ESt26random_access_iterator_tagE4copyIPK5fieldPS3_EET0_T_S8_S7_+0x3c)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x4221be]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ceng34:00724] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test-boost(_ZSt10__copy_auxIPK5fieldPS0_ET0_T_S5_S4_+0x29) [0x422203]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ceng34:00724] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test-boost(_ZNSt13__copy_normalILb0ELb0EE6copy_nIPK5fieldPS2_EET0_T_S7_S6_+0x25)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x42222b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ceng34:00724] [ 7] test-boost(_ZSt4copyIPK5fieldPS0_ET0_T_S5_S4_+0x2d)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x42225b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ceng34:00724] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test-boost(_ZN5boost3mpi6detail12scatter_implI5fieldEEvRKNS0_12communicatorEPKT_PS7_iiN4mpl_5bool_ILb0EEE+0x90)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x42a630]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ceng34:00724] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test-boost(_ZN5boost3mpi7scatterI5fieldEEvRKNS0_12communicatorEPKT_PS6_ii+0x50)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x42b162]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ceng34:00724] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test-boost(_ZN5boost3mpi7scatterI5fieldEEvRKNS0_12communicatorERKSt6vectorIT_SaIS7_EEPS7_ii+0x55)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x42b1db]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ceng34:00724] [11] test-boost(main+0x20e) [0x420880]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ceng34:00724] [12] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x3157c1d8b4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ceng34:00724] [13] test-boost(__gxx_personality_v0+0x169) [0x420489]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ceng34:00724] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that job rank 0 with PID 724 on node ceng34-ib exited on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12379/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12380.php">Josh Hursey: "Re: [OMPI users] can torque support  openmpi checkpoint?"</a>
<li><strong>Previous message:</strong> <a href="12378.php">Dorian Krause: "Re: [OMPI users] Signal code: Address not mapped (1) error"</a>
<li><strong>In reply to:</strong> <a href="12378.php">Dorian Krause: "Re: [OMPI users] Signal code: Address not mapped (1) error"</a>
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
